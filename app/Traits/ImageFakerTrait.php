<?php

namespace App\Traits;

trait ImageFakerTrait
{
    protected function addCustomProviders()
    {
        $this->faker->addProvider(new \Mmo\Faker\PicsumProvider($this->faker));
        $this->faker->addProvider(new \Mmo\Faker\LoremSpaceProvider($this->faker));
        $this->faker->addProvider(new \Mmo\Faker\FakeimgProvider($this->faker));
    }
}
