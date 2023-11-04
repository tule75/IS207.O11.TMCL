<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'address_id',
        'total_prices',
        'discount',
    ];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Watch::class, 'Order_items', 'order_id', 'watch_id')->withTrashed();
    }

    protected $table = 'Orders';
}
