<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

    $this->call('CoursesTableSeeder');
    $this->call('SchoolsTableSeeder');
    $this->call('CounselorsTableSeeder');
    $this->call('StudentsTableSeeder');
    $this->call('GradesTableSeeder');
    $this->call('RecruitersTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
