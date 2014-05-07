<?php

class UsersController extends \BaseController {

	
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