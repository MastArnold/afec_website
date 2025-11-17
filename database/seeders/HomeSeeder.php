<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'quote' => 'Chaque geste compte, chaque vie mérite d`\'être changée',
            'cover' => 'storage/header-1.jpeg',
            'about' => "
                L'ONG Association Frères des Écoles Chrétiennes (AFEC) est une organisation à but non lucratif légalement reconnue par l'Etat Burkinabè. Elle intervient dans les domaines de l’éducation de qualité à travers un réseau d’écoles primaires et secondaires
                de l’enseignement supérieur 
                de la formation technique et professionnelle
                du développement rural
                de la protection des enfants
                et de l’action humanitaire.

                L'AFEC est le principal instrument de collecte de fonds des Frères des Écoles Chrétiennes au Burkina Faso pour soutenir l'éducation des enfants et la formation des jeunes, surtout les plus vulnérables. 
            ",
            'theme' => 'storage/theme/2025.png',
            'theme_year' => '2025',
            'created_by' => 1,
            'created_at' => now(),
        ]);
    }
}
