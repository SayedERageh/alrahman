<?php

namespace App\Filament\Resources\PostsPages;

use App\Filament\Resources\PostsPages\Pages\CreatePostsPage;
use App\Filament\Resources\PostsPages\Pages\EditPostsPage;
use App\Filament\Resources\PostsPages\Pages\ListPostsPages;
use App\Filament\Resources\PostsPages\Schemas\PostsPageForm;
use App\Filament\Resources\PostsPages\Tables\PostsPagesTable;
use App\Models\PostPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PostsPageResource extends Resource
{
    protected static ?string $model = PostPage::class;

protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

protected static ?string $navigationLabel = 'صفحة المقالات';

protected static string|UnitEnum|null $navigationGroup = 'إعدادات الصفحات';

protected static ?string $modelLabel = 'صفحة المقالات';

protected static ?string $pluralModelLabel = 'صفحة المقالات';
    public static function form(Schema $schema): Schema
    {
        return PostsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostsPagesTable::configure($table);
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
            'index' => ListPostsPages::route('/'),
            'create' => CreatePostsPage::route('/create'),
            'edit' => EditPostsPage::route('/{record}/edit'),
        ];
    }
}
