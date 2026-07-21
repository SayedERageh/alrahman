<?php

namespace App\Filament\Resources\PostsPages\Pages;

use App\Filament\Resources\PostsPages\PostsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPostsPage extends EditRecord
{
    protected static string $resource = PostsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
