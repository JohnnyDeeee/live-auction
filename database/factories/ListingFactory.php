<?php

namespace Database\Factories;

use App\Traits\ImageFakerTrait;
use Illuminate\Database\Eloquent\Factories\Factory;
use Mmo\Faker\LoremSpaceProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    use ImageFakerTrait;

    public function configure()
    {
        $this->addCustomProviders();
        return $this;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $description = '';
        for ($i = 0; $i < $this->faker->numberBetween(2, 5); $i++) {
            $description .= $this->faker->sentences($this->faker->numberBetween(1,3), true) . '\n\n';
        }

        return [
            'title' => $this->faker->words(2, true),
            'description' => $description,
            'image_url' => $this->faker->picsumStaticRandomUrl(),
        ];
    }
}
