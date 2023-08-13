<?php

namespace App\Filament\Resources\Event\SessionResource\Pages;

use App\Filament\Resources\Event\SessionResource;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSession extends CreateRecord
{
    protected static string $resource = SessionResource::class;
}
