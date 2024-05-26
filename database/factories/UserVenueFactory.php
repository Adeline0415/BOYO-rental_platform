<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserVenue>
 */
class UserVenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            '場地名稱' => fake()->name(),
            '預定日期' => fake()->date(),
            '預定時段' => fake()->time()
        ];
    }
}
