<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\EventSession;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Events', Event::count()),
            Stat::make('Sessions', EventSession::count()),
            Stat::make('Users', User::count()),
        ];
    }
}
