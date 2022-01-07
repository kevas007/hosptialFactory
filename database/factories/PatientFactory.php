<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'register' => $this->faker->rrn(),
            'name' => $this->faker->name,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->date,
            'adresse' => $this->faker->address,
            // 'num_registre' => $this->faker->numberBetween(0, 900050900000500500),
            'genre' => $this->faker->randomElement(['M', 'F']),
            'adresse' => $this->faker->address,
            'pays' => $this->faker->country,
            'ville' => $this->faker->city,
            'code_postal' => $this->faker->numberBetween(0, 100),
            'num_telephone' => $this->faker->phoneNumber,
            'personne_contact' => $this->faker->name,
            'num_telephone_contact' => $this->faker->phoneNumber
        ];
    }
}
