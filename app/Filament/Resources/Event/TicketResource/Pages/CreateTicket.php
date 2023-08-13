<?php

namespace App\Filament\Resources\Event\TicketResource\Pages;

use App\Filament\Resources\Event\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicket extends CreateRecord
{
    protected static string $resource = TicketResource::class;
}
