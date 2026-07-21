<?php

namespace App\Filament\Resources\PostsPages\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PostsPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('عنوان الصفحة')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('الوصف')
                    ->rows(3),

                RichEditor::make('content')
                    ->label('المحتوى')
                    ->columnSpanFull(),

                TextInput::make('meta_title')
                    ->label('Meta Title'),

                Textarea::make('meta_description')
                    ->label('Meta Description')
                    ->rows(3),

                TextInput::make('meta_keywords')
                    ->label('Meta Keywords'),
            ]);
    }
}