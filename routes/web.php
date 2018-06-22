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

Route::get('home/slider/{id}', 'SliderController@displaySlider')->name('displaySlider');
Route::get('/delete/{id}','SliderController@delete');
Route::get('/create','SliderController@createform');
Route::get('/update/{id}','SliderController@updateform');
Route::post('/modify','SliderController@update');
Route::post('store','SliderController@store')->name('store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
