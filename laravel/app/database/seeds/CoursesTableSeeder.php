<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Course::create([
        'course_name' => $faker->catchPhrase,
        'subject'     => $faker->word,
        'type'        => $faker->randomDigitNotNull
			]);
		}
	}

}
