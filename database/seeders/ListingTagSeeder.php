<?php

namespace Database\Seeders;

use App\Models\ListingTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListingTag::factory()->count(10)->create();
    }
}
