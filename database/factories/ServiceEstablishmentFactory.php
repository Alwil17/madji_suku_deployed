<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceEstablishmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "description" => $this->faker->sentence(20),
            "image1" => $this->faker->imageUrl(640, 480),
            "image2" => $this->faker->imageUrl(640, 480),
            "image3" => $this->faker->imageUrl(640, 480),
            "service_id" => rand(1, 8),
            "establishment_id" => rand(1, 100),
        ];
    }
}
