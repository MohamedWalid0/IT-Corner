<?php

namespace Database\Seeders;

use App\Models\Assessment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('assessments')->delete();


        $assessments = [
            ['name'=>'Diagnosis'] ,
            ['name'=>'Drug Prescription'],
            ['name'=>'Lab / Rad Test Request'],
        ];


        Assessment::insert($assessments);


    }
}
