<?php

namespace Database\Factories;

use App\Models\Docteur;
use App\Models\HopitalLocal;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $startDate = Carbon::createFromFormat('Y/m/d', '2021/06/01');
        $endDate = Carbon::createFromFormat('Y/m/d', '2022/01/31');
        $startTime = Carbon::createFromFormat('H:i:s', '8:00:00');
        $endTime = Carbon::createFromFormat('H:i:s', '19:00:00');
        do {
            $randomDate= $this->faker->dateTimeBetween($startDate, $endDate);
            $randomTime= $this->faker->dateTimeBetween($startTime,  $endTime);
            $patient= Patient::inRandomOrder()->first();
            $docteur= Docteur::inRandomOrder()->first();
            $patientFree = $patient->consultations()->where('heure', $randomTime)->first();
            $docteurFree = $docteur->consultations()->where('heure', $randomTime)->where('date', $randomDate)->first();
        }while($patientFree || $docteurFree);
        if($randomDate > Carbon::now()){
            $statut_array=[1,2,4];
            $statut=  array_rand($statut_array);
            $statut_id= $statut_array[$statut];
        }else{
            $statut_array=[2,3,4];
            $statut=  array_rand($statut_array);
            $statut_id= $statut_array[$statut];
        }
        return [
            'patients_id' => $patient->register,
            'docteurs_id' => $docteur->id,
            'date' => Carbon::parse($randomDate)->format('Y/m/d'),
            'heure' => Carbon::parse($randomTime)->format('H:i:s'),
            'hopital_locals_id' => HopitalLocal::inRandomOrder()->first()->id,
            'type_consultations_id' => $statut_id
        ];
    }
}
