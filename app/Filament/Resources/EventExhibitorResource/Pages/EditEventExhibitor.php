<?php

namespace App\Filament\Resources\EventExhibitorResource\Pages;

use App\Filament\Resources\EventExhibitorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventExhibitor extends EditRecord
{
    protected static string $resource = EventExhibitorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
