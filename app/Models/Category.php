<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
    public $timestamps = false;
    
    public function products():HasMany
    {
        return $this->hasMany(Watch::class);
    }
    
    protected $table='category';
}
