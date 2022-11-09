<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "note" => rand(0, 5),
            "titre" => $this->faker->sentence(2),
            "commentaire" => $this->faker->sentence(15),
            "user_id" => rand(2, 100),
            "establishment_id" => rand(1, 100),
        ];
    }
}
