<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->lastName,
            'prenom'=>$this->faker->firstName($gender = 'male'|'female'),
            'dateNaissance'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'email'=>$this->faker->email,
            'tel'=>$this->faker->e164PhoneNumber
            //
        ];
    }
}
