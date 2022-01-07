<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doc_nom' => $this->faker->name,
            'experience' => $this->faker->numberBetween(0, 100),
            'specialisation' => $this->faker->jobTitle(),
        ];
    }
}
