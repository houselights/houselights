<?php

namespace App\Filament\Resources\EventTicketTypeResource\Pages;

use App\Filament\Resources\EventTicketTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventTicketType extends EditRecord
{
    protected static string $resource = EventTicketTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
