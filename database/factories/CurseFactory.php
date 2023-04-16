<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curse>
 */
class CurseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'detail' => fake()->sentence(),
            'description' => fake()->sentence(),
            'price' => fake()->randomNumber(),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ];
    }
}
