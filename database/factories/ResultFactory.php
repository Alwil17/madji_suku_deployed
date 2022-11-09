<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $classe = ['Maternelle1', 'Maternelle2', 'CP1', 'CP2', 'CE1', 'CE2', 'CM1', 'CM2', '6e', '5e', '4e', '3e', '2nd', '1ere', 'Terminale'];
        return [
            "classe" => $classe[rand(0, 14)],
            "inscrits" => rand(1, 100),
            "admis" => rand(1, 100),
            "annee_debut" => rand(2000, 2022),
            "annee_fin" => rand(2001, 2023),
            "establishment_id" => rand(0, 100),
            "exam_id" => rand(1, 14),
        ];
    }
}
