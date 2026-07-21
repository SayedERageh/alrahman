<?php

namespace App\Filament\Resources\PostsPages\Pages;

use App\Filament\Resources\PostsPages\PostsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPostsPages extends ListRecords
{
    protected static string $resource = PostsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
