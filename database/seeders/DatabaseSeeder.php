<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Dignostique;
use App\Models\Docteur;
use App\Models\DossierMedical;
use App\Models\HopitalLocal;
use App\Models\Local;
use App\Models\Patient;
use App\Models\TypeLocal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HopitalSeeder::class);

        $this->call(MaladieSeeder::class);
        $this->call(TypeConsultationSeeder::class);
        Docteur::factory()->count(50)->create();
        Patient::factory()->count(200)->create();
        Local::factory()->count(50)->create();
        TypeLocal::factory()->count(5)->create();
        HopitalLocal::factory()->count(150)->create();
        Consultation::factory()->count(2000)->create();
        $this->call(DignostiqueSeeder::class);
        // DossierMedical::factory()->count(2000)->create();
       $this->call(DossierMedicalSeeder::class);

    }
}
