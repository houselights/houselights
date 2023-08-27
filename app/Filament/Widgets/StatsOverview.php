<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Events', Event::count()),
            Stat::make('Sessions', Event\Session::count()),
            Stat::make('Users', User::count()),
        ];
    }
}
