<?php

namespace App\Filament\Resources\EventAttendeeResource\Pages;

use App\Filament\Resources\EventAttendeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventAttendees extends ListRecords
{
    protected static string $resource = EventAttendeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
