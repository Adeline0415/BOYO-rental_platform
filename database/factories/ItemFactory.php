<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        return [
            'Name' => $this->faker->word,
            'Borrowed' => $this->faker->boolean,
            'borrower' => User::inRandomOrder()->first()->id,
            'Return time' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'Late' => $this->faker->boolean,
        ];
    }
}