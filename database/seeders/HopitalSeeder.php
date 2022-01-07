<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HopitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hopitals')->insert([
            [
                'nom' => 'Hopital de la République',
                'adresse' => '1 rue de la République',
            ],
            [
                'nom' => 'Hopital de Lille',
                'adresse' => '15 rue de Lille',
            ],
            [
                'nom' => 'Hopital de Paris',
                'adresse' => '45 rue de Paris',
            ],
        ]);
    }
}
