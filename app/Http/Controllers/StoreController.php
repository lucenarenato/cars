<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
//use App\Http\Middleware\VerifyCsrfToken;

class StoreController extends BaseController {

	public function __construct() {
		parent::__construct();
		$this->middleware('csrf', array('on'=>'post'));
		$this->middleware('auth', array('only'=>array('getBookCar')));
		$this->middleware('auth');
	}

	public function getIndex() {
		return View::make('store.index')
			->with('cars', Car::orderBy('price')->paginate(4));
	}

	public function getView($id) {
		return View::make('store.view')->with('car', Car::find($id));
	}

	public function getCarType($type_id) {
		return View::make('store.car_type')
			->with('cars', Car::where('type_id', '=', $type_id)->orderBy('price')->paginate(3))
			->with('car_type', CarType::find($type_id));
	}

	public function getSearch() {
		$keyword = Input::get('keyword');

		return View::make('store.search')
			->with('cars', Car::where('title', 'LIKE', '%'.$keyword.'%')->get())
			->with('keyword', $keyword);
	}

	public function getBookCar() {
		$car = Car::find(Input::get('id'));

		if ($car) {
			return View::make('store.booking')
            ->with('car', Car::find(Input::get('id')));
		}

		return Redirect::to('/')
			->with('message', 'invalid car id, please try again');
	}

	public function getContact() {
		return View::make('store.contact');
	}
}
