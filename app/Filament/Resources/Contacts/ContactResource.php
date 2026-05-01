<?php

namespace App\Filament\Resources\Contacts;

use App\Filament\Resources\Contacts\Pages\CreateContact;
use App\Filament\Resources\Contacts\Pages\EditContact;
use App\Filament\Resources\Contacts\Pages\ListContacts;
use App\Filament\Resources\Contacts\Schemas\ContactForm;
use App\Filament\Resources\Contacts\Tables\ContactsTable;
use App\Models\Contact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedEnvelope;

protected static ?string $navigationLabel = 'الرسائل';

protected static string|UnitEnum|null $navigationGroup = 'إدارة الموقع';

protected static ?string $modelLabel = 'رسالة';

protected static ?string $pluralModelLabel = 'الرسائل';

// عشان تخليها آخر عنصر
protected static ?int $navigationSort = 999;
    public static function form(Schema $schema): Schema
    {
        return ContactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
public static function getNavigationBadge(): ?string
{
    return \App\Models\Contact::count();
}
    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'edit' => EditContact::route('/{record}/edit'),
        ];
    }
}
