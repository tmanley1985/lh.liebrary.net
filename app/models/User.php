<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {


	use UserTrait, RemindableTrait;

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public static $rules = [
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'required|email|unique:users',
		'username' => 'required|unique:users|min:6',
		'password' => 'required'
	];

	public static $messages;

	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

	//Checks whether input is valid against static rules method

	public static function isValid($data)
	{
		// Passes input to Validator class and leverages it against rules

		$validation = Validator::make($data, static::$rules);

		if($validation->passes()){
			return true;
		}

		//Creates an error message array

		static::$messages = $validation->messages();

		return false;
	}

}
