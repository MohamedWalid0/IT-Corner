<?php

namespace Database\Seeders;

use App\Models\AppointmentAssessment;
use Illuminate\Database\Seeder;

class AppointmentAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppointmentAssessment::factory(10)->create();
    }
}
