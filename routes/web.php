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
Route::get('/home/slider/create','SliderController@createform')->name('createform');
Route::get('/home/slider/{id}', 'SliderController@displaySlider')->name('displaySlider');
Route::get('/home/slider/delete/{id}','SliderController@delete')->name('delete');

Route::get('/home/slider/update/{id}','SliderController@updateform')->name('updateform');
Route::post('/home/slider/store','SliderController@store')->name('store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
