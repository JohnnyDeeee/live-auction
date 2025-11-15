<?php

namespace Database\Factories;

use App\Models\Listing;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListingTag>
 */
class ListingTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'listing_id' => Listing::inRandomOrder()->first()->id,
            'tag_id' => Tag::inRandomOrder()->first()->id,
        ];
    }
}
