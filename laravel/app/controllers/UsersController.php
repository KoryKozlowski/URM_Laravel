<?php

class UsersController extends \BaseController {

	public function dashboard()
	{
		if(Auth::user()->role ==1 )
		{
			Redirect::to('student/dash');
		} else if(Auth::user()->role ==2 ) {
			Redirect::to('counselor/dash');
		} else if(Auth::user()->role ==3 ) {
			Redirect::to('recruiter/dash');
		} else {
			Redirect::to('/');
		}
	}
	
	/**
	* Update the users password
	*
	*/
	public function password()
	{
		return View::make('static.password');
	}

	public function update()
	{
		$user = User::findOrFail(Auth::user()->email);

		$data = Input::all();

		$user->update($data);

		return Redirect::route('/dashboard');
	}

}