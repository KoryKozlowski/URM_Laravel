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
    $data = Input::all();
    // Create a student based on the form data
    Student::create($data);
    // send them to their dashboard 
		return Redirect::route('students.dash');
	}
  

  /**
   * Display the student dashboard
   *
   * @param int $id
   * @return response
   */
  public function dash($id)
  {
		$student = Student::findOrFail($id);
    
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
