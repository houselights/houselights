<?php

namespace App\Filament\Resources\Event\RegistrantResource\Pages;

use App\Filament\Resources\Event\RegistrantResource;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegistrant extends CreateRecord
{
    protected static string $resource = RegistrantResource::class;
}
