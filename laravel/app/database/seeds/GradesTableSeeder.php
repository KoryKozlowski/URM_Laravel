<?php

use Faker\Factory as Faker;

class GradesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
      $student = Student::orderBy(DB::raw('RAND()'))->first();
      $course = Course::orderBy(DB::raw('RAND()'))->first();
      $school = School::orderBy(DB::raw('RAND()'))->first();
      Grade::create([
        'student_id'  => $student->student_id,
        'course_id'  => $course->course_id,
        'school_id'  => $school->school_id,
        'year_taken' => $faker->year,
        'grade'      => $faker->randomNumber(0, 100)
			]);
		}
	}

}
