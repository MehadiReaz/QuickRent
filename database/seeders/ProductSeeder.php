<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Product;
        $obj->name = "I-Phone";
        $obj->price = 115000;
        $obj->category = "Phone";
        $obj->details = "I-Phone 13-Pro";
        $obj->photo ="";
        $obj->c_id = 3;
        $obj->save();

        $obj = new Product;
        $obj->name = "One Plus";
        $obj->price = 45000;
        $obj->category = "Phone";
        $obj->details = "One Plus 9RT 8/128";
        $obj->photo ="";
        $obj->c_id = 3;
        $obj->save();

    }
}
