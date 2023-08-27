<?php

namespace App\Filament\Resources\EventRegistrantResource\Pages;

use App\Filament\Resources\EventRegistrantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventRegistrant extends EditRecord
{
    protected static string $resource = EventRegistrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
