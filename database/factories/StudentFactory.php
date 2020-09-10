<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'roll_number' => $faker->randomNumber(6),
        'dob' => $faker->date(),
        'gender' => $faker->word(),
        'religion' => $faker->word(),
        'cast' => $faker->word(),
        'phone_number' => $faker->numerify('98'),
        'passed_college_name' => $faker->sentence(1),
        'permanent_full_address' => $faker->sentence(1),
        'current_full_address' => $faker->sentence(1),
        'passed_year' => $faker->year(),
        'marks_obtain' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2)
    ];
});

        
            
