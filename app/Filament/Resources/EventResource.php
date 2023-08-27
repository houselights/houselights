<?php

namespace App\Filament\Resources;

use App\Enums\EventType;
use App\Enums\MeetingType;
use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationGroup = "Event";

    protected static ?string $navigationLabel = "Events";

    protected static ?int $navigationSort = 10;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                Forms\Components\Select::make("timezone")
                    ->options(["Asia/Shanghai"]),
                Forms\Components\Select::make("event_type")
                    ->options(EventType::asSelectArray()),
                Forms\Components\Select::make("access_level")
                    ->options(["PRIVATE_UNRESTRICTED", "PRIVATE_RESTRICTED"]),
                Forms\Components\Select::make("meeting_type")
                    ->options(MeetingType::asSelectArray()),
                Forms\Components\SpatieTagsInput::make('categories'),
                Forms\Components\SpatieTagsInput::make('tags'),
                Forms\Components\Select::make("status")
                    ->options(["PUBLISHED", "DRAFT"]),
                Forms\Components\DateTimePicker::make('start_time'),
                Forms\Components\DateTimePicker::make('end_time'),

                TextInput::make('contact_name'),

                Forms\Components\DateTimePicker::make('lobby_start_time'),
                Forms\Components\DateTimePicker::make('lobby_end_time'),



            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->fontFamily(FontFamily::Mono),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i:s')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime('Y-m-d H:i:s')
                    ->sortable(),
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
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\SessionsRelationManager::class,
            RelationManagers\RegistrantsRelationManager::class,
            RelationManagers\TicketTypesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
