<?php

namespace App\Filament\Resources\Event\AttendeeResource\Pages;

use App\Filament\Resources\Event\AttendeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttendees extends ListRecords
{
    protected static string $resource = AttendeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
