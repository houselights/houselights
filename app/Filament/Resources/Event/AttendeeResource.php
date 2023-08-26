<?php

namespace App\Filament\Resources\Event;

use App\Filament\Resources\Event\AttendeeResource\Pages;
use App\Filament\Resources\Event\AttendeeResource\RelationManagers;
use App\Models\Event\Attendee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendeeResource extends Resource
{
    protected static ?string $model = Attendee::class;

    protected static ?string $navigationGroup = "Event";

    protected static ?string $navigationLabel = "Attendees";

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
            'index' => Pages\ListAttendees::route('/'),
            //'create' => Pages\CreateAttendee::route('/create'),
            'edit' => Pages\EditAttendee::route('/{record}/edit'),
        ];
    }
}
