<?php

class Student extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'ACT',
		'SAT',
		'GPA',
		'statement',
		'school_id',
		'counselor_id',
		'verified',
		'PLAN',
		'clubs',
		'sports',
		'jobs',
		'aspiration',
		'champions'
	];
}