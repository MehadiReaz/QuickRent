<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'final_price',
        'product_id',
        'borrower_id',
        'status',
    ];

    public function owner(){
        return Customer::where('id', $this->owner_id)->first();
    }

    public function borrower(){
        return Customer::where('id', $this->borrower_id)->first();
    }

    public function product(){
        return Customer::where('id', $this->product_id)->first();
    }
}
