<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consideration extends Model
{
    use HasFactory;

    protected $fillable = [
        'consideration',
    ];

    /**
     * Get the trend that considerations.
     */
    public function trend(): BelongsTo
    {
        return $this->belongsTo(Trend::class);
    }
}
