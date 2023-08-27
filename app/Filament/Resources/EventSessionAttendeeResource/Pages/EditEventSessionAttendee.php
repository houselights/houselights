<?php

namespace App\Filament\Resources\EventSessionAttendeeResource\Pages;

use App\Filament\Resources\EventSessionAttendeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventSessionAttendee extends EditRecord
{
    protected static string $resource = EventSessionAttendeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
