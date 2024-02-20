<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Tags\HasTags;

class Trend extends Model
{
    use HasFactory, HasTags;
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'description',
        'relevant',
        'image',
        'active'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function characteristics(): HasMany
    {
        return $this->hasMany(Characteristic::class);
    }

    /**
     * Get the considerations for the Trend.
     */
    public function considerations(): HasMany
    {
        return $this->hasMany(Consideration::class);
    }

    /**
     * Get the challenges for the Trend.
     */
    public function challenges(): HasMany
    {
        return $this->hasMany(Challenge::class);
    }

    /**
     * Get the facts for the Trend.
     */
    public function facts(): HasMany
    {
        return $this->hasMany(Fact::class);
    }

    /**
     * Get the references for the Trend.
     */
    public function references(): HasMany
    {
        return $this->hasMany(Reference::class);
    }
}
