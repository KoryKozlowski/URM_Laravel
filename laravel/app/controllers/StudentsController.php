<?php

class StudentsController extends \BaseController {

	/**
	 * Show the form for creating a new student
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('students.create');
	}

	/**
	 * Store a newly created student in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $student = new Student;
    $student->verified = false;
    $student->save();

    User::create([
      'first_name' => Input::get('first_name'),
      'last_name'  => Input::get('last_name'),
      'email'      => Input::get('email'),
      'password'   => Hash::make(Input::get('password')),
      'role'       => 1,
      'role_id'    => $student->id
    ]);

    // send them to their dashboard
		return Redirect::to('students/dash');
	}


  /**
   * Display the student dashboard
   *
   * @return response
   */
  public function dash()
  {
		$student = Student::findOrFail(Auth::user()->role_id);

    return View::make('students.dash', compact('student'));
  }

	/**
	 * Display the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student = Student::findOrFail($id);

		return View::make('students.show', compact('student'));
	}

	/**
	 * Show the form for editing the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student = Student::find($id);

		return View::make('students.edit', compact('student'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$student = Student::findOrFail($id);

		$data = Input::all();

		$student->update($data);

		return Redirect::route('students.dash');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Student::destroy($id);

		return Redirect::route('/');
	}

}
