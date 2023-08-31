<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hub>
 */
class HubFactory extends Factory
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
            'description' => $this->faker->title,
            'access_level' => '',
            'hidden_hub' => $this->faker->boolean,
            'hub_active' => $this->faker->boolean,
            'auto_list_events' => $this->faker->boolean,
            'landing_hub' => $this->faker->boolean,
        ];
    }
}
