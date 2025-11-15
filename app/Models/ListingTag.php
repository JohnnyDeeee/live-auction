<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ListingTag extends Pivot
{
    /** @use HasFactory<\Database\Factories\ListingTagFactory> */
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'tag_id',
    ];
}
