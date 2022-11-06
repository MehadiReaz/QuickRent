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
        //Phone
        $obj = new Product;
        $obj->name = "I-Phone";
        $obj->price = 115000;
        $obj->category = "Phone";
        $obj->details = "I-Phone 13-Pro";
        $obj->status ="rented";
        $obj->photo ="uploads/product/1.jpg";
        $obj->c_id = 1;
        $obj->save();

        $obj = new Product;
        $obj->name = "One Plus";
        $obj->price = 45000;
        $obj->category = "Phone";
        $obj->details = "One Plus 9RT 8/128";
        $obj->photo ="uploads/product/2.jpg";
        $obj->c_id = 2;
        $obj->save();

        $obj = new Product;
        $obj->name = "Samsung";
        $obj->price = 55000;
        $obj->category = "Phone";
        $obj->details = "Samsung S21 FE 6/128";
        $obj->photo ="uploads/product/3.jpg";
        $obj->c_id = 3;
        $obj->save();

        $obj = new Product;
        $obj->name = "Pixel";
        $obj->price = 56000;
        $obj->category = "Phone";
        $obj->details = "Pixel 6 6/128";
        $obj->photo ="uploads/product/4.jpg";
        $obj->c_id = 4;
        $obj->save();

        $obj = new Product;
        $obj->name = "Realmi";
        $obj->price = 15500;
        $obj->category = "Phone";
        $obj->details = "Realmi C2 6/64";
        $obj->photo ="uploads/product/5.jpg";
        $obj->c_id = 5;
        $obj->save();

        //Bike

        $obj = new Product;
        $obj->name = "Yamaha R15M";
        $obj->price = 570000;
        $obj->category = "Moto-bike";
        $obj->details = "Engine-150 Cc,Mileage-40 Kmpl,Dual Channel ABS";
        $obj->photo ="uploads/product/6.jpg";
        $obj->c_id = 1;
        $obj->save();

        $obj = new Product;
        $obj->name = "Honda CBR 150R";
        $obj->price = 550000;
        $obj->category = "Moto-bike";
        $obj->details = "Engine-150 Cc,Mileage-40 Kmpl,Dual Channel ABS";
        $obj->photo ="uploads/product/7.jpg";
        $obj->c_id = 2;
        $obj->save();

        $obj = new Product;
        $obj->name = "Yamaha R15 V4";
        $obj->price = 115000;
        $obj->category = "Moto-bike";
        $obj->details = "Engine-150 Cc,Mileage-40 Kmpl,Dual Channel ABS";
        $obj->photo ="uploads/product/8.jpg";
        $obj->c_id = 3;
        $obj->save();

        $obj = new Product;
        $obj->name = "Suzuki GSX-R150 ABS";
        $obj->price = 429950;
        $obj->category = "Moto-bike";
        $obj->details = "Engine-150 Cc,Mileage-35 Kmpl,Dual Channel ABS";
        $obj->photo ="uploads/product/9.jpg";
        $obj->c_id = 4;
        $obj->save();

        $obj = new Product;
        $obj->name = "KTM RC 125 2022";
        $obj->price = 487000;
        $obj->category = "Moto-bike";
        $obj->details = "Engine-125 Cc,Mileage-40 Kmpl,Bosch 9.1 MB 1-Channel ABS";
        $obj->photo ="uploads/product/10.jpg";
        $obj->c_id = 5;
        $obj->save();

        //Car

        $obj = new Product;
        $obj->name = "Toyota Axio X 2017 Silver";
        $obj->price = 2150000;
        $obj->category = "Car";
        $obj->details = "Model:Axio X,Engine Capacity:1500cc,Fuel System:Octane";
        $obj->photo ="uploads/product/11.jpg";
        $obj->c_id = 1;
        $obj->save();

        $obj = new Product;
        $obj->name = "Nissan X-Trail Hybrid 2017";
        $obj->price = 3950000;
        $obj->category = "Car";
        $obj->details = "Model:Axio X,Engine Capacity:1500cc,Fuel System:Octane/Hybrid";
        $obj->photo ="uploads/product/12.jpg";
        $obj->c_id = 2;
        $obj->save();

        $obj = new Product;
        $obj->name = "Toyota Allion G Black 2019";
        $obj->price = 3650000;
        $obj->category = "Car";
        $obj->details = "Model:Allion G,Engine Capacity:1500cc,Fuel System:Octane";
        $obj->photo ="uploads/product/13.jpg";
        $obj->c_id = 3;
        $obj->save();

        $obj = new Product;
        $obj->name = "Toyota Allion A15 2008";
        $obj->price = 1645000;
        $obj->category = "Car";
        $obj->details = "Model:Allion A15,Engine Capacity:1500cc,Fuel System:Octane/LPG";
        $obj->photo ="uploads/product/14.jpg";
        $obj->c_id = 4;
        $obj->save();

        $obj = new Product;
        $obj->name = "Toyota Harrier 2017 Black";
        $obj->price = 7080000;
        $obj->category = "Car";
        $obj->details = "Model:Harrier,Engine Capacity:1500cc,Fuel System:Octane";
        $obj->photo ="uploads/product/15.jpg";
        $obj->c_id = 5;
        $obj->save();

        //Book
        $obj = new Product;
        $obj->name = "Javascript The Definitive Guid";
        $obj->price = 529;
        $obj->category = "Book";
        $obj->details = "Author: David Flanagan,Publishers: O'Reilly";
        $obj->photo ="uploads/product/16.jpg";
        $obj->c_id = 1;
        $obj->save();

        $obj = new Product;
        $obj->name = "Python Crash Course";
        $obj->price = 414;
        $obj->category = "Book";
        $obj->details = "Author: Eric Matthes,Publishers: San Francisco";
        $obj->photo ="uploads/product/17.jpg";
        $obj->c_id = 2;
        $obj->save();

        $obj = new Product;
        $obj->name = "Programming In ANSI C (Eighth Edition)";
        $obj->price = 115000;
        $obj->category = "Book";
        $obj->details = "Author: E - Balagurusamy,Publishers: Mcgraw Hill Education";
        $obj->photo ="uploads/product/18.jpg";
        $obj->c_id = 3;
        $obj->save();

        $obj = new Product;
        $obj->name = "Python Crash Course";
        $obj->price = 414;
        $obj->category = "Book";
        $obj->details = "Author: Eric Matthes,Publishers: San Francisco";
        $obj->photo ="uploads/product/19.jpg";
        $obj->c_id = 4;
        $obj->save();

        $obj = new Product;
        $obj->name = "Javascript The Definitive Guid";
        $obj->price = 529;
        $obj->category = "Book";
        $obj->details = "Author: David Flanagan,Publishers: O'Reilly";
        $obj->photo ="uploads/product/20.jpg";
        $obj->c_id = 5;
        $obj->save();

        //Refrigerator
        $obj = new Product;
        $obj->name = "Walton Direct Cool Refrigerator WFE-2H2-GDEN-XX";
        $obj->price = 37490;
        $obj->category = "Refrigerator";
        $obj->details = "Warranty: 12years,Capacity: 282 Ltr";
        $obj->photo ="uploads/product/21.jpg";
        $obj->c_id = 1;
        $obj->save();

        $obj = new Product;
        $obj->name = "Samsung Top Mount Refrigerator RT34M5535S8/D2";
        $obj->price = 53300;
        $obj->category = "Refrigerator";
        $obj->details = "Warranty: 12years,Capacity: 324 Litre";
        $obj->photo ="uploads/product/22.jpg";
        $obj->c_id = 2;
        $obj->save();

        $obj = new Product;
        $obj->name = "HAIKO HRT-350GB-Red Refrigerator";
        $obj->price = 41770;
        $obj->category = "Refrigerator";
        $obj->details = "Warranty: 10years,Capacity: 350 Ltr";
        $obj->photo ="uploads/product/23.jpg";
        $obj->c_id = 3;
        $obj->save();

        $obj = new Product;
        $obj->name = "Sharp Minibar Refrigerator SJ-K155-SS ";
        $obj->price = 23900;
        $obj->category = "Refrigerator";
        $obj->details = "Warranty: 10years,Capacity: 118 Ltr";
        $obj->photo ="uploads/product/24.jpg";
        $obj->c_id = 4;
        $obj->save();

        $obj = new Product;
        $obj->name = "Walton Direct Cool Refrigerator WFE-2H2-GDEN-XX";
        $obj->price = 37490;
        $obj->category = "Refrigerator";
        $obj->details = "Warranty: 12years,Capacity: 282 Ltr";
        $obj->photo ="uploads/product/25.jpg";
        $obj->c_id = 5;
        $obj->save();

        // $obj = new Product;
        // $obj->name = "I-Phone";
        // $obj->price = 115000;
        // $obj->category = "Refrigerator";
        // $obj->details = "I-Phone 13-Pro";
        // $obj->photo ="";
        // $obj->c_id = 6;
        // $obj->save();



    }
}
