<?php

namespace App\Filament\Resources\AboutPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('seo_title')
                    ->label('SEO Title')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('seo_description')
                    ->label('SEO Description')
                    ->limit(60),

                TextColumn::make('seo_keywords')
                    ->label('SEO Keywords')
                    ->limit(40),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}