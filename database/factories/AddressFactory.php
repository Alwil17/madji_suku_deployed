<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelle" => $this->faker->sentence(3),
            "postal" => $this->faker->postcode(),
            "email" => $this->faker->companyEmail(),
            "ville" => $this->faker->city(),
            "tel1" => $this->faker->e164PhoneNumber(),
            "tel2" => $this->faker->e164PhoneNumber(),
            "address" => $this->faker->address(),
            "addressbis" => $this->faker->streetAddress(),
            "latitude" => $this->faker->latitude,
            "longitude" => $this->faker->longitude,
            "establishment_id" => rand(1, 100),
        ];
    }
}
