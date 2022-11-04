<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public $timestamps = true;
=======
    public $timestamps = false;
>>>>>>> ff281d5197b9c9f57ee41163fe4eb26ffb113a9f
    protected $fillable = [
        'name',
        'price',
        'category',
        'c_id',
    ];
}