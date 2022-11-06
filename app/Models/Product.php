<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'price',
        'category',
        'details',
        'photo',
        'c_id',
    ];

    public function owner(){
        return Customer::where('id', $this->c_id)->first();
    }

}
