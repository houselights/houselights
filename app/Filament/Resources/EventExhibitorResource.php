<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventExhibitorResource\Pages;
use App\Filament\Resources\EventExhibitorResource\RelationManagers;
use App\Models\EventExhibitor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventExhibitorResource extends Resource
{
    protected static ?string $model = EventExhibitor::class;

    protected static ?string $navigationGroup = "Event";

    protected static ?string $navigationLabel = "Exhibitors";

    protected static ?int $navigationSort = 20;

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
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\IconColumn::make('is_sponsor')->boolean(),
                Tables\Columns\TextColumn::make('description')->limit(40),
                Tables\Columns\TextColumn::make('website')->limit(40),
                Tables\Columns\TextColumn::make('event.name'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('event_name')
                    ->relationship('event', 'name'),
                Tables\Filters\TernaryFilter::make('is_sponsor'),
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
            'index' => Pages\ListEventExhibitors::route('/'),
            //'create' => Pages\CreateEventExhibitor::route('/create'),
            'edit' => Pages\EditEventExhibitor::route('/{record}/edit'),
        ];
    }
}
