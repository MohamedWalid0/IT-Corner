<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'appointment_id' => Appointment::inRandomOrder()->first()->id,
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'total_fees' => random_int(150 , 5000),

        ];
    }
}
