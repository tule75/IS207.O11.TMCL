<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Watch extends Model
{
    use HasFactory;
    public static function boot() {
        parent::boot();

        self::creating(function ($model) {

        });
    }

    protected $fillable = [
        'name',
        'price',
        'storage',
        'brand_id',
        'slug',
        'category_id',
        'description',
    ];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Orders::class, 'Orders_items', 'watch_id', 'order_id');
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Users::class, 'Carts', 'watch_id', 'user_id');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected $table = 'watches';
}
