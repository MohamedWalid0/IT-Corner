<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('days')->delete();


        $days = [
            ['name'=>'Saturday'] ,
            ['name'=>'SunDay'],
            ['name'=>'Monday'],
            ['name'=>'Tuesday'] ,
            ['name'=>'Wednesday'],
            ['name'=>'Thursday'],
            ['name'=>'Friday'],
        ];


        Day::insert($days);



    }
}
