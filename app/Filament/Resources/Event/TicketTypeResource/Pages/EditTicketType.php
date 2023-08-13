<?php

namespace App\Filament\Resources\Event\TicketTypeResource\Pages;

use App\Filament\Resources\Event\TicketTypeResource;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketType extends EditRecord
{
    protected static string $resource = TicketTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
