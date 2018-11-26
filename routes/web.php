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

//Route::get('/', array('uses'=>'StoreController@getIndex'));
//Route::resource('admin/cars', 'CarsController');
//Route::resource('store', 'StoreController');
//Route::get('/', ['before'=>'csrf','uses' => 'StoreController@getIndex', 'as' => '/']);

Route::group(['middleware' => ['web']], function () {
  //Route::resource('/', 'StoreController');
	Route::resource('users', 'UsersController');
  Route::resource('admin/cars', 'CarsController');
  Route::resource('store', 'StoreController');
  Route::get('/', array('uses'=>'StoreController@getIndex'));

});

////Route::post('bookings/create', 'BookingsController@postCreate');
////Route::resource('bookings', 'BookingsController');
