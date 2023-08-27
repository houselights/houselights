<?php

namespace App\Filament\Resources\EventRegistrantResource\Pages;

use App\Filament\Resources\EventRegistrantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventRegistrants extends ListRecords
{
    protected static string $resource = EventRegistrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
