<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Assessment;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentAssessmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'assessment_id' => Assessment::inRandomOrder()->first()->id,
            'appointment_id' => Appointment::inRandomOrder()->first()->id,
        ];

    }
}
