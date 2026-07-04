<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([

                TextInput::make('question')
                    ->label('السؤال')
                    ->required()
                    ->maxLength(255),

                Textarea::make('answer')
                    ->label('الإجابة')
                    ->required()
                    ->rows(6)
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('الترتيب')
                    ->numeric()
                    ->default(0)
                    ->required()
                    ->helperText('كلما كان الرقم أصغر ظهر السؤال أولاً.'),

                Toggle::make('is_active')
                    ->label('إظهار السؤال')
                    ->default(true),

            ]);
    }
}