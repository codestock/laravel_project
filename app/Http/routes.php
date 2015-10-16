<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::any('contact', 'WelcomeController@contact');
Route::any('hello', 'WelcomeController@hello');

Route::post('students','StudentController@store');
Route::get('students', 'StudentController@index');
Route::get('students/create','StudentController@create');
Route::get('students/{id}', 'StudentController@show');
