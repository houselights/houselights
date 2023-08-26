<?php

namespace App\Filament\Resources\Event\RegistrantResource\Pages;

use App\Filament\Resources\Event\RegistrantResource;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegistrants extends ListRecords
{
    protected static string $resource = RegistrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
