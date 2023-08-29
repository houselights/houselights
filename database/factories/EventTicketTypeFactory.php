<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventTicketType>
 */
class EventTicketTypeFactory extends Factory
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
            'currency' => $this->faker->currencyCode,
            'free' => false,
            'price' => 99.9,
            'quantity' => 100,
            'sold_quantity' => 80,
            'start_time' => '2023-09-09 10:10:10',
            'end_time' => '2023-10-09 10:10:10',
            'description' => $this->faker->address,
        ];
    }
}
