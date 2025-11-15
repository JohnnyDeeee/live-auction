<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\ListingTag;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::all();
        Listing::all()->each(function (Listing $listing) use ($tags) {
            $tagIds = $tags->random(rand(1, 3))->pluck('id')->toArray();
            $listing->tags()->syncWithoutDetaching($tagIds);
        });
    }
}
