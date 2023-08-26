<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models;
use App\Policies;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Models\Event\Session::class => Policies\Event\SessionPolicy::class,
        Models\Event\TicketType::class => Policies\Event\TicketTypePolicy::class,
        Models\Event\Registrant::class => Policies\Event\RegistrantPolicy::class,
        Models\Event\Ticket::class => Policies\Event\TicketPolicy::class,
        Models\Event\Attendee::class => Policies\Event\AttendeePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
