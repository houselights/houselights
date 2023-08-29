<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->title,
            'description' => $this->faker->title,
            'timezone' => 'Asia/Shanghai',
            'event_type' => '',
            'access_level' => '',
            'meeting_type' => '',
            'status' => '',
            'start_time' => '2023-01-01 00:00:00',
            'end_time' => '2023-01-01 00:00:00',
            'contact_name' => 'admin',
            'lobby_start_time' => '2023-01-01 00:00:00',
            'lobby_end_time' => '2023-01-01 00:00:00',
        ];
    }
}
