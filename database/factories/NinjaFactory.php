<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'skill' => $this->faker->numberBetween(0, 100),
            'bio' => $this->faker->realText(500),
            'dojo_id' => Dojo::inRandomOrder()->first()->id,
        ];
    }
}
