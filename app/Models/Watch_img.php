<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Watch_img extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'watch_id'
    ];

    public function watch():BelongsTo
    {
        return $this->belongsTo(Watch::class);
    }

    protected $table = 'watch_img';
}
