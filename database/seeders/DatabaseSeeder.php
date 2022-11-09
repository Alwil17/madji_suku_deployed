<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Establishment;
use App\Models\Exam;
use App\Models\Rating;
use App\Models\Service;
use App\Models\ServiceEstablishment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            'Examen de passage en classe de CP1',
            'Examen de passage en classe de CP2',
            'Examen de passage en classe de CE1',
            'Examen de passage en classe de CE2',
            'Examen de passage en classe de CM1',
            'Examen de passage en classe de CM2',
            'CEPD',
            'Examen de passage en classe de 5e',
            'Examen de passage en classe de 4e',
            'Examen de passage en classe de 3e',
            'BEPC',
            'Examen de passage en classe de 1ere',
            'BAC 1',
            'BAC 2',
        ];

        $services = [
            "Cantine", "Bibliothèque", "Salle de repos", "Salle de loisirs", "Salle d'étude", "Infirmerie", "Gymnase", "Cours de répétitions"
        ];

        $categories = [
            "Ecole primaire", "Enseignement général", "Lycée", "Collège", "Enseignement privé", "Maternelle", "EPP", "Groupe scolaire"
        ];

        User::create([
            'prenoms' => 'Grey',
            'nom' => 'Attackeur',
            'email' => 'grey@madji-suku.com',
            'type' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('P@ssw0rd'),
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(99)->create();
        \App\Models\Establishment::factory(100)->create();
        \App\Models\Address::factory(200)->create();
        \App\Models\Rating::factory(250)->create();

        foreach ($services as $service) {
            Service::create([
                "libelle" => $service,
                "slug" => Str::slug($service)
            ]);
        }
        \App\Models\ServiceEstablishment::factory(150)->create();

        foreach ($exams as $exam) {
            Exam::create([
                "libelle" => $exam,
                "slug" => Str::slug($exam)
            ]);
        }
        \App\Models\Result::factory(300)->create();

        foreach ($categories as $category) {
            Category::create([
                "libelle" => $category,
                "slug" => Str::slug($category)
            ]);
        }
        \App\Models\CategoryEstablishment::factory(200)->create();
    }
}
