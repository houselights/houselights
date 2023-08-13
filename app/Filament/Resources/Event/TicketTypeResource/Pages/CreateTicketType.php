<?php

namespace App\Filament\Resources\Event\TicketTypeResource\Pages;

use App\Filament\Resources\Event\TicketTypeResource;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketType extends CreateRecord
{
    protected static string $resource = TicketTypeResource::class;
}
