<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Dignostique;
use App\Models\DossierMedical;
use App\Models\Maladie;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DossierMedicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consult = Consultation::where('type_consultations_id', '=', 3)->get();

        foreach ($consult as $c) {
            // $dossier = new DossierMedical();
            $patient = $c->patients;
        if( $patient->dossiermedicals->count() < 5){
 
                $maladie = Maladie::inRandomOrder()->first();
                $diagnostique = Dignostique::inRandomOrder()->first();

            if ($maladie->curable) {
                $diagnostique->id = 4;
            } else {
                $maladie = Maladie::inRandomOrder()->first();
                $diagnostique = Dignostique::inRandomOrder()->where('id', '!=', 4)->first();
            }

            // if($consultation->consultations_id==3)
            // {
            //     $maladie= Maladie::inRandomOrder()->first();
            // }
            // else
            // {

            //     $maladie=null;
            // }

                DB::table('dossier_medicals')->insert([
                    'consultations_id' => $c->id,
                    'maladies_id' => $maladie->id,
                    'dignostiques_id' => $diagnostique->id,
                    'patients_id' => $patient->register,

                ]);

        }

        }
    }
}
