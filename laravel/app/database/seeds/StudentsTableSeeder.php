<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Student::create([
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'email'      => $faker->email, 
        'password'   => Hash::make('password'),
        'ACT'        => $faker->randomNumber(0, 36),
        'SAT'        => $faker->randomNumber(0, 2400),
        'GPA'        => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 4),
        'statement'  => $faker->text($maxNbChars = 200),
        'school_id'  => 1,
        'counselor_id' => 1,
        'verified'   => $faker->boolean 
			]);
		}
	}

}
