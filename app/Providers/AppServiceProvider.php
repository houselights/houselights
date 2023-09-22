<?php

namespace App\Providers;

use App\View\Components;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use IntlDateFormatter;
use OpenPsa\Ranger\Ranger;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Facades\Health;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('ranger', function () {
            $ranger = new Ranger("zh_CN");
            $ranger->setTimeType(IntlDateFormatter::SHORT);
            return $ranger;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('button', Components\Button::class);
        Blade::component('dropdown', Components\Dropdown::class);
        Blade::component('modal', Components\Modal::class);
        Blade::component('input', Components\Input::class);

        Health::checks([
            OptimizedAppCheck::new(),
            DebugModeCheck::new(),
            EnvironmentCheck::new(),
        ]);
    }
}
