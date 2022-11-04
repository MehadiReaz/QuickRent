<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Admin;
        $obj->name = "Abc";
        $obj->email = "newuser@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->photo = "";
        $obj->token = "";
        $obj->save();
    }
}
