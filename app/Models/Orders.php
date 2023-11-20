<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'voucher_id',
        'gift',
        'description',
    ];

    public function watches(): BelongsToMany
    {
        return $this->belongsToMany(Watch::class, 'Order_items', 'order_id', 'watch_id')->withTrashed();
    }

    public function voucher(): BelongsTo
    {
        return $this->belongsTo(Voucher::class);
    }

    protected $table = 'Orders';
}
