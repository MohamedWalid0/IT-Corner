<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            DaySeeder::class,
            PatientSeeder::class,
            VisitTypeSeeder::class,
            AppointmentSeeder::class,
            AssessmentSeeder::class,
            AppointmentAssessmentSeeder::class ,
            ProcedureSeeder::class,
            PatientProceduresSeeder::class ,
            BillSeeder::class,

        ]);
    }
}
