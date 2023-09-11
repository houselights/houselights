<?php

namespace App\Filament\Resources\EventResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Money\Currencies\ISOCurrencies;

class TicketTypesRelationManager extends RelationManager
{
    protected static string $relationship = 'ticketTypes';

    public function form(Form $form): Form
    {
        $currencies = [];
        foreach (new ISOCurrencies() as $currency) {
            $currencies[$currency->getCode()] = $currency->getCode();
        }

        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\DateTimePicker::make('start_time'),

                Forms\Components\DateTimePicker::make('end_time'),

                Forms\Components\Checkbox::make('free')
                    ->live()
                    ->label('免费')
                    ->helperText("免费票不需要进行支付"),

                Forms\Components\Select::make('currency')
                    ->options($currencies)
                    ->hidden(fn (Forms\Get $get): bool => !! $get('free')),

                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->hidden(fn (Forms\Get $get): bool => !! $get('free')),

                Forms\Components\TextInput::make('quantity')->integer(),

                Forms\Components\Textarea::make('description')
                    ->required(),
            ])
            ->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('id')->fontFamily(FontFamily::Mono),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\TextColumn::make('sold_quantity'),
                Tables\Columns\TextColumn::make('start_time'),
                Tables\Columns\TextColumn::make('end_time'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
}
