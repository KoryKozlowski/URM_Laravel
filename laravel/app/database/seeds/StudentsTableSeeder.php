<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
      $school = School::orderBy(DB::raw('RAND()'))->first();
      $counselor = Counselor::orderBy(DB::raw('RAND()'))->first();
			Student::create([
        'ACT'        => $faker->randomNumber(0, 36),
        'SAT'        => $faker->randomNumber(0, 2400),
        'GPA'        => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 4),
        'statement'  => $faker->text($maxNbChars = 200),
        'school_id'  => $school->id,
        'counselor_id' => $counselor->id,
        'verified'   => $faker->boolean,
        'PLAN'       => $faker->randomNumber(1, 32),
        'clubs'      => $faker->text($maxNbChars = 100),
        'sports'     => $faker->text($maxNbChars = 100),
        'jobs'       => $faker->text($maxNbChars = 100),
        'aspiration' => $faker->text($maxNbChars = 100),
        'champion'   => $faker->text($maxNbChars = 400) 
			]);
		}
	}

}
