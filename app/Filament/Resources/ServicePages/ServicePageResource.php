<?php

namespace App\Filament\Resources\ServicePages;

use App\Filament\Resources\ServicePages\Pages\CreateServicePage;
use App\Filament\Resources\ServicePages\Pages\EditServicePage;
use App\Filament\Resources\ServicePages\Pages\ListServicePages;
use App\Filament\Resources\ServicePages\Schemas\ServicePageForm;
use App\Filament\Resources\ServicePages\Tables\ServicePagesTable;
use App\Models\Servicepage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ServicePageResource extends Resource
{
    protected static ?string $model = Servicepage::class;

protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

protected static ?string $navigationLabel = 'الخدمات';

protected static string|UnitEnum|null $navigationGroup = 'إعدادات الصفحات';

protected static ?string $modelLabel = 'صفحة الخدمات';

protected static ?string $pluralModelLabel = 'صفحة الخدمات';
    public static function form(Schema $schema): Schema
    {
        return ServicePageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicePagesTable::configure($table);
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
            'index' => ListServicePages::route('/'),
            'create' => CreateServicePage::route('/create'),
            'edit' => EditServicePage::route('/{record}/edit'),
        ];
    }
}
