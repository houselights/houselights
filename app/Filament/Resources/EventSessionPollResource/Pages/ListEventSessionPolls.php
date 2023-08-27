<?php

namespace App\Filament\Resources\EventSessionPollResource\Pages;

use App\Filament\Resources\EventSessionPollResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventSessionPolls extends ListRecords
{
    protected static string $resource = EventSessionPollResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
