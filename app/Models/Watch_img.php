<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch_img extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'watch_id'
    ];
    protected $table = 'watch_img';
}
