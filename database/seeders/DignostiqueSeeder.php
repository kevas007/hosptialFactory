<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DignostiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dignostiques')->insert([
            ['libelle' => 'diagnostiqué'],
            ['libelle' => 'en cours de traitement'],
            ['libelle' => 'guéri'],
            ['libelle' => 'incurable'],
        ]);
    }
}
