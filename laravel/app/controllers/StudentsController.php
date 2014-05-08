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
        $user = User::findOrFail(Auth::user()->email);
        $data = [
            'student' => $student,
            'user'    => $user
        ];
    return View::make('students.dash')->with('data', $data);
  }

	/**
	 * Display the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
        $student = Student::findOrFail(Auth::user()->role_id);
        $user = User::findOrFail(Auth::user()->email);
        $school = School::findOrFail($student->school_id);
        $data = [
            'student' => $student,
            'user' => $user,
            'school' => $school
        ];
		return View::make('students.show')->with('data', $data);
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
