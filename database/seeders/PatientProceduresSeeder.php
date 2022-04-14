<?php

namespace Database\Seeders;

use App\Models\PatientProcedure;
use Illuminate\Database\Seeder;

class PatientProceduresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientProcedure::factory(10)->create();

    }
}
