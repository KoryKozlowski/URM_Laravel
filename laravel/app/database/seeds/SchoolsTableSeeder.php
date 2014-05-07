<?php

use Faker\Factory as Faker;

class SchoolsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			School::create([
        'name'    => $faker->company,
        'address' => $faker->streetAddress,
        'phone'   => $faker->phoneNumber,
        'website' => $faker->url,
        'color1'  => ltrim($faker->hexcolor, "#"),
        'color2'  => ltrim($faker->hexcolor, "#")
			]);
		}
	}

}
