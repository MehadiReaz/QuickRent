<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Category;
        $obj->name = "Phone";
        $obj->save();

        $obj = new Category;
        $obj->name = "Moto-bike";
        $obj->save();

        $obj = new Category;
        $obj->name = "Car";
        $obj->save();

        $obj = new Category;
        $obj->name = "Book";
        $obj->save();

        $obj = new Category;
        $obj->name = "Refrigerator";
        $obj->save();
    }
}
