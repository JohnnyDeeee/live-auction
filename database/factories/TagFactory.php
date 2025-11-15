<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    const POSSIBLE_CATEGORIES = [
        'Electronics & Gadgets',
        'Home & Kitchen Appliances',
        'Clothing & Accessories',
        'Health & Beauty Products',
        'Sports & Outdoor Gear',
        'Toys & Games',
        'Automotive Supplies',
        'Office & School Supplies',
        'Books & Stationery',
        'Pet Supplies',
        'Jewelry & Watches',
        'Shoes & Footwear',
        'Furniture & Home Decor',
        'Art & Crafts Materials',
        'Baby & Kids Products',
        'Music & Instruments',
        'Garden & Outdoor Living',
        'Food & Beverages',
        'Video Games & Consoles',
        'Networking & Computer Hardware',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(self::POSSIBLE_CATEGORIES),
        ];
    }
}
