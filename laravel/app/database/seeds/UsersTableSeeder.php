<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
      $role =  $faker->randomNumber(1, 3);
      $foreign;
      if($role ==1 )
      {
        $foreign = Student::orderBy(DB::raw('RAND()'))->first();
      } else if($role == 2) {
        $foreign = Recruiter::orderBy(DB::raw('RAND()'))->first();
      } else {
        $foreign = Counselor::orderBy(DB::raw('RAND()'))->first();
      }
      
      User::create([
        'first_name'  => $faker->firstName,
        'last_name'   => $faker->lastName,
        'email'       => $faker->email,
        'password'    => Hash::make('password'),
        'role'        => $role,
        'role_id'     => $foreign->id
			]);
		}
	}

}
