<?php

use Faker\Factory as Faker;

class CounselorsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
      $school = School::orderBy(DB::raw('RAND()'))->first();
			Counselor::create([
        'school_id' => $school->id
			]);
		}
	}

}
