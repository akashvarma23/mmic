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

Route::resource('/', 'WelcomeController');
Route::resource('/about-us', 'AboutController');
Route::resource('/contact-us', 'ContactController');

Route::group(['prefix'=>'/experiences'],function(){
	Route::get('/', 'ExperiencesController@index');
	Route::get('/{seg1?}'.'/{seg2?}'.'/{seg3?}'.'/{seg4?}', 'ExperiencesController@get');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
