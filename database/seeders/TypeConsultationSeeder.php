<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_consultations')->insert([
            ['statut' =>'planifie'],
            ['statut' =>'annule'],
            ['statut' =>'fait'],
            ['statut' =>'raté'],
        ]);
    }
}
