<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Procedure;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientProcedureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'procedure_id' => Procedure::inRandomOrder()->first()->id,
        ];
    }
}
