<?php

namespace Database\Seeders;

use App\Models\VisitType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('visit_types')->delete();


        $visitTypes = [
            [
                'name'=>'Examination',
                'cost'=> 200
            ] ,
            [
                'name'=>'Consultation',
                'cost'=> 150

            ],

        ];


        VisitType::insert($visitTypes);

    }
}
