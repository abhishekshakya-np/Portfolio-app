<?php

namespace App\Filament\Resources;

use App\Constants\ComponentConstant;
use App\Constants\ElementStatusConstant;
use App\Constants\PageConstant;
use App\Filament\Resources\ElementResource\Pages;
use App\Filament\Resources\ElementResource\RelationManagers;
use App\Helpers\DynamicFormBuilder;
use App\Models\Element;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ElementResource extends Resource
{
    protected static ?string $model = Element::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $jsonSchemaData = self::getJsonSchemaData();

        $formSchema = [
            Forms\Components\Select::make('page')
                ->required()
                ->options(PageConstant::class)
                ->searchable(),
            Forms\Components\Select::make('component')
                ->label('Section')
                ->required()
                ->options(ComponentConstant::class)
                ->reactive()
                ->searchable(),
            Forms\Components\Select::make('status')
                ->required()
                ->options(ElementStatusConstant::class)
                ->searchable(),
            ...self::buildForm($jsonSchemaData),
        ];

        return $form->schema($formSchema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListElements::route('/'),
            'create' => Pages\CreateElement::route('/create'),
            'edit' => Pages\EditElement::route('/{record}/edit'),
        ];
    }

    private static function getJsonSchemaData()
    {
        try {
            //read json file
            $jsonFilePath = storage_path('app/component-schema.json');
            $json = File::get($jsonFilePath);

            return json_decode($json, true);
        } catch (\Exception $exception) {
            Log::critical($exception);

            return null;
        }
    }
    private static function buildForm($jsonSchemaData): array
    {
        $fieldSets = [];
        foreach (ComponentConstant::cases() as $value) {
            $fields = DynamicFormBuilder::buildFormFromJson(
                $jsonSchemaData,
                $value->value
            );
            $fieldSets[] = Forms\Components\Fieldset::make('content')
                ->hidden(
                    fn (Forms\Get $get): bool => $get('component') !==
                        $value->value
                )
                ->columnSpan('full')
                ->schema($fields);
        }

        return $fieldSets;
    }

}
