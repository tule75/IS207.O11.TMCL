<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'quantity',
        'address_id',
        'total_prices',
        'discount',
    ];
    protected $table = 'Orders';
}
