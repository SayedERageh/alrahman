<?php

namespace App\Filament\Resources\PostsPages\Pages;

use App\Filament\Resources\PostsPages\PostsPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePostsPage extends CreateRecord
{
    protected static string $resource = PostsPageResource::class;
}
