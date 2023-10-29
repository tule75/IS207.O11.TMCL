<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'storage',
        'brand_id',
        'slug',
        'category_id',
        'description',
    ];
    protected $table = 'watches';
}
