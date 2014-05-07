<?php

use Faker\Factory as Faker;

class CounselorsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Counselor::create([
        'email'     => $faker->email,
        'password'  => Hash::make('password'),
        'first_name'=> $faker->firstName,
        'last_name' => $faker->lastName,
        'school_id' => 1
			]);
		}
	}

}
