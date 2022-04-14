<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('procedures')->delete();


        $procedures = [
            [
                'name'=>'Tooth Filling',
                'cost' =>random_int(150 , 5000),
            ] ,
            [
                'name'=>'Cleaning teeth',
                'cost' =>random_int(150 , 5000),
            ],
            [
                'name'=>'Endodontics',
                'cost' =>random_int(150 , 5000),
            ],
            [
                'name'=>'Extractions',
                'cost' =>random_int(150 , 5000),
            ] ,
            [
                'name'=>'Dental implant',
                'cost' =>random_int(150 , 5000),
            ]
        ];


        Procedure::insert($procedures);

    }
}
