<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{

    public function run(): void
    {
        $item = new Items();
        $item->name = "Cofee";
        $item->save();

        $item = new Items();
        $item->name = "Apples";
        $item->save();

        $item = new Items();
        $item->name = "Pears";
        $item->save();

        $item = new Items();
        $item->name = "Sausages";
        $item->save();

        $item = new Items();
        $item->name = "Yogurt";
        $item->save();

        $item = new Items();
        $item->name = "Butter";
        $item->save();

        $item = new Items();
        $item->name = "Chocolate";
        $item->save();
    }
}