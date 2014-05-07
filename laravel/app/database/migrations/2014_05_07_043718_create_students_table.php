<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ACT');
			$table->integer('SAT');
			$table->float('GPA');
			$table->text('statement');
			$table->integer('school_id')->unsigned();
			$table->integer('counselor_id')->unsigned();
			$table->boolean('verified');
			$table->timestamps();
      // Add this after the schools migration is made.
      //$table->foreign('school_id')->references('school_id')->on('schools');
      // Figure out why this won't migrate??? 
      //$table->foreign('counselor_id')->references('counselor_id')->on('counselors');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
