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
        $obj->name = "Reaz";
        $obj->email = "reaz@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->phone = "01733901774";
        $obj->country = "Bangladesh";
        $obj->address = "Balubari,Khilkhat";
        $obj->state ="Dhaka";
        $obj->city = "Dhaka";
        $obj->zip = "Reaz.zip";
        $obj->status =0;
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->save();

        $obj = new Customer;
        $obj->name = "Shoumik";
        $obj->email = "shoumik@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->phone = "01843901794";
        $obj->country = "Bangladesh";
        $obj->address = "Kazibari,Kuril Bishwa Road";
        $obj->state ="Dhaka";
        $obj->city = "Dhaka";
        $obj->zip = "shoumik.zip";
        $obj->status =0;
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->save();

        $obj = new Customer;
        $obj->name = "Hamim";
        $obj->email = "hamim@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->phone = "01733901774";
        $obj->country = "Bangladesh";
        $obj->address = "Nikunjo-2,Road 1/B";
        $obj->state ="Dhaka";
        $obj->city = "Dhaka";
        $obj->zip = "hamim.zip";
        $obj->status =0;
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->save();

        $obj = new Customer;
        $obj->name = "Shams";
        $obj->email = "shams@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->phone = "01796915157";
        $obj->country = "Bangladesh";
        $obj->address = "Dhanmondi Road 11/A";
        $obj->state ="Dhaka";
        $obj->city = "Dhaka";
        $obj->zip = "shams.zip";
        $obj->status =0;
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->save();

        $obj = new Customer;
        $obj->name = "Jahid";
        $obj->email = "jahid@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->phone = "01733901567";
        $obj->country = "Bangladesh";
        $obj->address = "Kuratoli,Kazibari";
        $obj->state ="Dhaka";
        $obj->city = "Dhaka";
        $obj->zip = "jahid.zip";
        $obj->status =0;
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->save();

        $obj = new Customer;
        $obj->name = "Kanon";
        $obj->email = "kanon@gmail.com";
        $obj->password = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->phone = "01733561774";
        $obj->country = "Bangladesh";
        $obj->address = "House-building,Uttora";
        $obj->state ="Dhaka";
        $obj->city = "Dhaka";
        $obj->zip = "kanon.zip";
        $obj->status =0;
        $obj->token = "$2y$10$4.tH2GkXHLS04br0NXJhLe3qB4AQ/wpEVC6ww86LLm0sRX1ghAJIO";
        $obj->save();



    }
}
