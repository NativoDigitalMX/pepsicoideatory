<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'challenge',
    ];

    /**
     * Get the trend that challenges.
     */
    public function trend(): BelongsTo
    {
        return $this->belongsTo(Trend::class);
    }
}
