<?php

class SessionsController extends \BaseController {

  /**
	 * Show the login form for creating a new session
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('static.login');
	}

	/**
	 * Store a newly created session in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $credentials = array(
      'email'   => Input::get('email'),
      'password'=> Input::get('password')
    );

    $result = Auth::attempt($credentials, true);
    if(Auth::attempt($credentials))
    {
      return Redirect::intended('/');
    } else {
      return Redirect::guest('login');
    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{

    Auth::logout();
		return Redirect::to('/');
	}

}
