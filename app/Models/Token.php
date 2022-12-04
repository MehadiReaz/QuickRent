<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'c_id',
        'token',
        'created_at',
        'expired_at',
    ];
}
