<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName . ' ' .$this->faker->lastName ,
            'age' => random_int(1 , 99),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
