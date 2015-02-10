<?php 
class UsersController extends BaseController
{
	public function create()
	{
		return View::make('users.register');
	}

	public function store()
	{

		if ( ! User::isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors(User::$messages);
		}
		$user = new User;

		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));

		$user->save();

		return Redirect::route('users.index');
	}

	public function getLogin()
	{
		return View::make('users.login');
	}

	public function index(){
		$users = User::simplePaginate(5);

		return View::make('users.list')->with('users', $users);
	}

	public function show($username)
	{
		$user = User::whereUsername($username)->first();

		return View::make('users.profile')->with('user', $user);

		
	}

}