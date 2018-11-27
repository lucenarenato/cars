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
//--------teste de rota----------/////
	Route::get('/welcome', function () {
	    return view('welcome');
	});
	Route::get('/hello', function()
	{
	    return View::make('hello');
	});
	Route::get('/phpinfo', function(){
		phpinfo();
	});
//--------fim teste de rota----------/////

Route::get('/', array('uses'=>'StoreController@getIndex')); // do cars
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//--------------------------------------------------------------//

Route::resource('admin/car_types', 'CarTypesController');
Route::resource('admin/cars', 'CarsController');
Route::resource('store', 'StoreController');
Route::resource('users', 'UsersController');
Route::resource('bookings', 'BookingsController');
Route::post('bookings/create', 'BookingsController@postCreate');
//Route::post('admin/cars',['middleware' => 'verifyCsrf' , 'uses' => 'CarsController@getIndex']);
//Route::get('admin/cars',['middleware' => 'verifyCsrf' , 'uses' => 'CarsController@getIndex']);

/*Route::group(['middleware' => ['web']], function () {
  //Route::resource('/', 'StoreController');
  Route::resource('users', 'UsersController');
  //Route::resource('admin/cars', 'CarsController');
  Route::resource('store', 'StoreController');
  

});
Route::group(['middleware' => 'auth'], function() {

   Route::resource('admin/cars', 'CarsController');
    
});*/

////Route::post('bookings/create', 'BookingsController@postCreate');
////Route::resource('bookings', 'BookingsController');
//Route::get('/', ['before'=>'csrf','uses' => 'StoreController@getIndex', 'as' => '/']);




/*$router->post('url', ['middleware' => 'csrf', function() {
 ... 
}]);*/
