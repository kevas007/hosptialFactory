<?php

namespace Database\Factories;

use App\Models\Hopital;
use App\Models\Local;
use App\Models\TypeLocal;
use Illuminate\Database\Eloquent\Factories\Factory;


class HopitalLocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // do {
            $hopital= Hopital::inRandomOrder()->withCount('hopital_locals')->get();
            $hopitals=$hopital->where('hopital_locals_count', '<', 80)->first();
        // } while ($hopital->hopital_locals()->count() >= 80);
        return [
            'locals_id' => Local::inRandomOrder()->first()->id,
            'hopitals_id' => $hopitals,
            'type_locals_id' => TypeLocal::inRandomOrder()->first()->id
        ];
    }
}
