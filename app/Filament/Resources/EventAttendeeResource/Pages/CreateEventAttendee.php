<?php

namespace App\Filament\Resources\EventAttendeeResource\Pages;

use App\Filament\Resources\EventAttendeeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventAttendee extends CreateRecord
{
    protected static string $resource = EventAttendeeResource::class;
}
