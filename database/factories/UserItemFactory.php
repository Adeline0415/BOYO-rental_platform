<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserItem>
 */
class UserItemFactory extends Factory
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
            '應歸還日期' => fake()->date(),
            '逾期' => fake()->randomElement(['是', '否'])
        ];
    }
}
