<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Listing extends Model
{
    /** @use HasFactory<\Database\Factories\ListingFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url'
    ];

    /**
     * @return BelongsToMany<Tag, $this, ListingTag>
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->using(ListingTag::class);
    }
}
