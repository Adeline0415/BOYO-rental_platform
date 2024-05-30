<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserHistoryVenue>
 */
class UserHistoryVenueFactory extends Factory
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
            '租借日期' => fake()->date(),
            '租借時段' => fake()->time()
        ];
    }
}
