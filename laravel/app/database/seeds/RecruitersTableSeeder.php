<?php

use Faker\Factory as Faker;

class RecruitersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
      $school = School::orderBy(DB::raw('RAND()'))->first();
      Recruiter::create([
        'email'     => $faker->email, 
        'password'  => Hash::make('password'),
        'first_name'=> $faker->firstName, 
        'last_name' => $faker->lastName,
        'school_id' => $school->school_id,
        'verified'  => $faker->boolean
			]);
		}
	}

}
