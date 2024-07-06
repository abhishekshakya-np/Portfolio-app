<?php

namespace App\Helpers;

use Exception;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Log;

class DynamicFormBuilder
{
    public static function buildFormFromJson($data, $componentName): array
    {
        try {
            $filteredComponents = array_values(
                array_filter($data['components'], function ($component) use (
                    $componentName
                ) {
                    return $component['name'] === $componentName;
                })
            );

            if (empty($filteredComponents)) {
                return [];
            }

            $fields = [];

            foreach ($filteredComponents[0]['fields'] as $field) {
                $fields = self::getFields($field, $fields, $componentName);
            }

            return $fields;
        } catch (Exception $e) {
            Log::critical($e);
        }

        return [];
    }

    public static function getFields(
        mixed $field,
        array $fields,
        $componentName
    ): array {
        switch ($field['type']) {
            case 'textarea':
                $form = Textarea::make("content.{$field['name']}")->label(
                    $field['label']
                );
                if (isset($field['required']) && ! $field['required']) {
                    $fields[] = $form;
                } else {
                    $fields[] = $form->required();
                }
                break;
            case 'file':
                $fields[] = FileUpload::make("content.{$field['name']}")
                    ->label($field['label'])
                    ->image()
                    ->directory('elements')
                    ->preserveFilenames()
                    ->visibility('private')
                    ->required();
                break;
            case 'text':
                $form = TextInput::make("content.{$field['name']}")->label(
                    $field['label']
                );
                if (isset($field['required']) && ! $field['required']) {
                    $fields[] = $form;
                } else {
                    $fields[] = $form->required();
                }
                break;
            case 'select':
                $result = [];

                foreach ($field['options'] as $item) {
                    $result = array_merge($result, $item);
                }
                $form = Select::make("content.{$field['name']}")
                    ->label($field['label'])
                    ->options($result);
                if (isset($field['required']) && ! $field['required']) {
                    $fields[] = $form;
                } else {
                    $fields[] = $form->required();
                }
                break;
            case 'richtextarea':
                $fields[] = RichEditor::make("content.{$field['name']}")
                    ->columnSpanFull()
                    ->label($field['label'])
                    ->required();
                break;
            case 'repeater':
                $subfields = [];
                foreach ($field['fields'] as $subField) {
                    $subfields = self::getFields(
                        $subField,
                        $subfields,
                        $componentName
                    );
                }
                $fields[] = Repeater::make("content.{$field['name']}")
                    ->columnSpanFull()
                    ->label($field['label'])
                    ->schema($subfields);
                break;
        }

        return $fields;
    }
}
