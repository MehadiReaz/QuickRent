<?php

namespace Database\Seeders;

//use App\Http\Middleware\Customer;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Customer;
        $obj->name = "Abc";
        $obj->email = "reaz@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->status =0;
        $obj->save();

    }
}
