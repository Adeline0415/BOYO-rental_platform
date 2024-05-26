<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Item;
use Illuminate\Database\Seeder;

class TypesAndItemsSeeder extends Seeder
{
    public function run()
    {
        // 建立3個種類
        $types = Type::factory()->count(3)->create();

        // 為每個種類建立隨機數量的物品
        $types->each(function ($type) {
            $items = Item::factory()->count(rand(1, 10))->make();
            $type->items()->saveMany($items);
        });
    }
}