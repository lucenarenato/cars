<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
//use App\Http\Middleware\VerifyCsrfToken;
use App\User;
//use Auth;


class UsersController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->middleware('csrf', array('on'=>'post'));
		$this->middleware('auth');
	}

	public function getNewaccount() {
		return View::make('users.newaccount');
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->telephone = Input::get('telephone');
			$user->save();

			return Redirect::to('users/signin')
				->with('message', 'Thank you for creating a new account. Please sign in.');
		}

		return Redirect::to('users/newaccount')
			->with('message', 'Something went wrong')
			->withErrors($validator)
			->withInput();
	}

	public function getSignin() {
		return View::make('users.signin');
	}

	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('/')->with('message', 'Thanks for signing in');
		}

		return Redirect::to('users/signin')->with('message', 'Your email/password combo was incorrect');
	}

	public function getSignout() {
		Auth::logout();
		return Redirect::to('users/signin')->with('message', 'You have been signed out');
	}
}
