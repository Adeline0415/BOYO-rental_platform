<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserHistoryItem>
 */
class UserHistoryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            '物品名稱' => fake()->word(),
            '編號' => fake() -> uuid(),
            '租借日期' => fake()->date(),
            '歸還日期' => fake()->date()
        ];
    }
}
