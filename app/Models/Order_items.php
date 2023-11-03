<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_items extends Model
{
    use HasFactory;
    //có thể điền vào
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    private function watches(): BelongsTo
    {
        return $this->belongsTo(Products::class);
    }

    protected $table = 'order_items';
}
