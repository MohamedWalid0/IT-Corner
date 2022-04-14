<?php

namespace Database\Factories;

use App\Models\Day;
use App\Models\Patient;
use App\Models\VisitType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $fakeStartTime =  Carbon::today()->subHours(random_int(1, 24)) ;

        $endTime = new Carbon($fakeStartTime) ;


        return [
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'visit_type_id' => VisitType::inRandomOrder()->first()->id,
            'day_id' => Day::inRandomOrder()->first()->id,

            'start_time'=> $fakeStartTime,
            'end_time'=> $endTime->addMinutes(30),

        ];
    }
}
