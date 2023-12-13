<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'province',
        'district',
        'ward',
        'phone_number',
        'address',
        'user_id'
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function default()
    {
        if ($this->hasOne(User::class) == null) {
            return false;
        }
        return true;
    }
    protected $table='address';
}
