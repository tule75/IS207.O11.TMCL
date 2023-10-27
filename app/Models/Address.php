<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'province',
        'district',
        'ward',
        'phone_number',
        'address',
    ];

    protected $table='address';
}
