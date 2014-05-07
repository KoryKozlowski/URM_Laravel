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
        'school_id' => $school->id,
        'verified'  => $faker->boolean
			]);
		}
	}

}
