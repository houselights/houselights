<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventSessionAttendeeResource\Pages;
use App\Filament\Resources\EventSessionAttendeeResource\RelationManagers;
use App\Models\EventSessionAttendee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventSessionAttendeeResource extends Resource
{
    protected static ?string $model = EventSessionAttendee::class;

    protected static ?string $navigationGroup = "Event";

    protected static ?string $navigationLabel = "Session Attendees";

    protected static ?int $navigationSort = 60;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->fontFamily(FontFamily::Mono),
                TextColumn::make('session.event.name'),
                TextColumn::make('session.name'),
                TextColumn::make('ticket.ticketType.name'),
                TextColumn::make('ticket.user.name'),
                TextColumn::make('created_at')->dateTime('Y-m-d H:i:s'),
                TextColumn::make('updated_at')->dateTime('Y-m-d H:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                //Tables\Actions\CreateAction::make(),
            ]);
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
            'index' => Pages\ListEventSessionAttendees::route('/'),
            //'create' => Pages\CreateEventSessionAttendee::route('/create'),
            'edit' => Pages\EditEventSessionAttendee::route('/{record}/edit'),
        ];
    }
}
