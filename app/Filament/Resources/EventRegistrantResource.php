<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventRegistrantResource\Pages;
use App\Filament\Resources\EventRegistrantResource\RelationManagers;
use App\Models\EventRegistrant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventRegistrantResource extends Resource
{
    protected static ?string $model = EventRegistrant::class;

    protected static ?string $navigationGroup = "Event";

    protected static ?string $navigationLabel = "Registrants";

    protected static ?int $navigationSort = 40;

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
                TextColumn::make('event.name'),
                TextColumn::make('user.name'),
                TextColumn::make('created_at')->dateTime('Y-m-d H:i:s'),
                TextColumn::make('updated_at')->dateTime('Y-m-d H:i:s'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('event_name')
                    ->relationship('event', 'name'),
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
            'index' => Pages\ListEventRegistrants::route('/'),
            //'create' => Pages\CreateEventRegistrant::route('/create'),
            'edit' => Pages\EditEventRegistrant::route('/{record}/edit'),
        ];
    }
}
