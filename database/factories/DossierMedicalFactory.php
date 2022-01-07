<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Dignostique;
use App\Models\Maladie;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class DossierMedicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // do {
        //     $patient= Patient::inRandomOrder()->first();
        //     $consultation= Consultation::inRandomOrder()->first();
        //     $maladie= Maladie::inRandomOrder()->first();
        //     $diagnostique= Dignostique::inRandomOrder()->first();

        //     }while($patient->dossiermedical->count() >= 5);

        // return [
        //     'consultations_id'=> $consultation->id,
        //     'maladies_id'=> $maladie->id,
        //     'dignostiques_id'=> $diagnostique->id,
        //     'patients_id' =>$patient->register,

        // ];
        do {
            $patient = Patient::inRandomOrder()->first();
            $consultation = Consultation::inRandomOrder()->first();
            $maladie = Maladie::inRandomOrder()->first();
            $diagnostique = Dignostique::inRandomOrder()->first();
        } while ($patient->dossiermedicals->count() > 5);
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
        return [
            'consultations_id' => $consultation->id,
            'maladies_id' => $maladie->id,
            'dignostiques_id' => $diagnostique->id,
            'patients_id' => $patient->register,

        ];

    }
}
