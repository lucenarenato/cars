<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//--------------------------------------------------------------//

Route::get('/', array('uses'=>'StoreController@getIndex'));

Route::resource('admin/cars', 'CarsController');
Route::resource('store', 'StoreController');

Route::group(['middleware' => ['web']], function () {
	Route::resource('users', 'UsersController');
	//Route::post('bookings/create', 'BookingsController@postCreate');
	//Route::resource('bookings', 'BookingsController');
	
});
#
#

/*Route::resources([
    'photos' => 'PhotoController',
    'posts' => 'PostController'
]);*/

//$this->app['request']->setSession($this->app['session']->driver('array'));