<?php

namespace App\Filament\Resources\EventAttendeeResource\Pages;

use App\Filament\Resources\EventAttendeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventAttendee extends EditRecord
{
    protected static string $resource = EventAttendeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
