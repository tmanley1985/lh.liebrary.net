<?php

class SessionsController extends BaseController
{
	public function create(){
		if(Auth::check()){

			return Redirect::to('/');
		}
		return View::make('sessions.create');
	}

	public function store()
	{
		// Checks attempt to login against input
		if (Auth::attempt(Input::only('username', 'password'))){

			return Redirect::to('/');
	}

		return "Fails";
	}

	public function destroy(){

		//Logs the user out
		Auth::logout();

		return Redirect::to('/login');
	}
}