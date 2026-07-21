<?php

namespace App\Filament\Resources\HomePages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class HomePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('seo_title')
                    ->label('SEO Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('seo_description')
                    ->label('SEO Description')
                    ->rows(4)
                    ->columnSpanFull(),

                Textarea::make('seo_keywords')
                    ->label('SEO Keywords')
                    ->helperText('افصل بين الكلمات المفتاحية بفاصلة (,)')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}