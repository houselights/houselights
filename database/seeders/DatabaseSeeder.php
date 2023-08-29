<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\EventSession;
use App\Models\EventTicket;
use App\Models\EventTicketType;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()
            ->withPersonalTeam()
            ->create([
                'email' => 'admin@example.com',
            ]);
        Event::factory()
            ->has(EventTicketType::factory()->count(3), 'ticketTypes')
            ->has(EventSession::factory()->count(3), 'sessions')
            ->count(6)
            ->create();
    }
}
