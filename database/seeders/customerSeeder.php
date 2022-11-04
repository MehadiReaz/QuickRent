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
        $obj->password = "12345";
        $obj->token = "12345";
        $obj->status =0;
        $obj->save();

    }
}
