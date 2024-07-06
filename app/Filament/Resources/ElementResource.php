<?php

namespace App\Filament\Resources;

use App\Constants\ComponentConstant;
use App\Constants\ElementStatusConstant;
use App\Constants\PageConstant;
use App\Filament\Resources\ElementResource\Pages;
use App\Filament\Resources\ElementResource\RelationManagers;
use App\Helpers\DynamicFormBuilder;
use App\Models\Element;
use Exception;
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

    /**
     *
     *
     * @param Form $form The form instance to be used.
     * @return Form The generated form schema.
     * @throws Exception
     */
    public static function form(Form $form): Form
    {
        /**
         * Builds the form schema based on the provided JSON schema data.
         *
         * @param Form $form The form instance to be used.
         * @return Form The generated form schema.
         */
        // Retrieve the JSON schema data
        $jsonSchemaData = self::getJsonSchemaData();

        // Define the form schema components
        $formSchema = [
            // Page selection dropdown
            Forms\Components\Select::make('page')
                ->required() // Set as a required field
                ->options(PageConstant::class) // Set the options from the enum class
                ->searchable(), // Enable search functionality

            // Section selection dropdown
            Forms\Components\Select::make('component')
                ->label('Section') // Set the label
                ->required()
                ->options(ComponentConstant::class)
                ->reactive() // Indicate that the options depend on the selected page
                ->searchable(),

            // Status selection dropdown
            Forms\Components\Select::make('status')
                ->required()
                ->options(ElementStatusConstant::class)
                ->searchable(),

            // Add the dynamically generated form components
            ...self::buildForm($jsonSchemaData),
        ];

        // Return the form schema
        return $form->schema($formSchema);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page'),
                Tables\Columns\TextColumn::make('component'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('content.title'),
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


    /**
     * Retrieves JSON schema data from a file.
     *
     * @throws Exception description of exception
     * @return mixed
     */
    private static function getJsonSchemaData(): mixed
    {
        try {
            //read json file
            $jsonFilePath = storage_path('app/component-schema.json');
            $json = File::get($jsonFilePath);

            return json_decode($json, true);
        } catch (Exception $exception) {
            Log::critical($exception);

            return null;
        }
    }


    /**
     * Builds a form based on the given JSON schema data.
     *
     * @param mixed $jsonSchemaData The JSON schema data used to build the form.
     * @return array An array of field sets representing the form.
     */
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
