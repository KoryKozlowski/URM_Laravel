<?php

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($email, $password, $fname, $lname)
	{
		DB::insert('insert into students (email, password, first_name, last_name) values (?, ?, ?, ?)', array($email, $password, $fname, $lname));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, $act, $sat, $gpa)
	{
		if($act){
			DB::update('update students set ACT = ? where id = ?', array($act, $id));
		}
		if($sat){
			DB::update('update students set SAT = ? where id = ?', array($sat, $id));
		}
		if($gpa){
			DB::update('update students set GPA = ? where id = ?', array($gpa, $id));
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function changePass($id, $oldPass, $newPass)
	{
		DB::update('update students set password = ? where id = ? and password = ?', array($newPass, $id, $oldPass));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::delete('delete from students where id = ?', array($id));
	}

}