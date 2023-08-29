<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventSession>
 */
class EventSessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->address,
            'start_time' => '2023-09-09 10:10:10',
            'end_time' => '2023-10-09 10:10:10',
            'timezone' => $this->faker->timezone,
            'type' => '',
        ];
    }
}
