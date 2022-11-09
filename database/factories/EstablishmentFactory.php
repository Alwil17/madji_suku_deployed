<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstablishmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom = $this->faker->company;

        return [
            "nom" => $nom,
            "slug" => Str::slug($nom),
            "description_courte" => $this->faker->sentence(10),
            "description_longue" => $this->faker->sentence(40),
            "image" => $this->faker->imageUrl(640, 480),
            "banner" => $this->faker->imageUrl(1350, 550),
            "active" => rand(0, 1),
            "website" => $this->faker->url,
            "user_id" => rand(2, 50),
        ];
    }
}
