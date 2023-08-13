<?php

namespace App\Filament\Resources\Event\RegistrantResource\Pages;

use App\Filament\Resources\Event\RegistrantResource;
use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegistrant extends EditRecord
{
    protected static string $resource = RegistrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
