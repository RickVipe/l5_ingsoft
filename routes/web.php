<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/
Route::resource('students', 'StudentController');
Route::resource('teachers', 'TeacherController');
Route::resource('admins', 'AdminController');
Route::resource('policias', 'PoliciaController');
/*
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layout.layout');
});

Route::get('hello', function() {
  return 'Hello World';
});

Route::get('hello/{name}', function($name) {
  return 'Hello ' .$name;
});

Route::get('demo/{name}', 'DemoController@welcoming');

Route::resource('demo1', 'DemoController');


Route::get('vista', function() {
	return view('vista', ['name' => 'Rick']);
});

Route::get('layout/{name}', 'DemoController@inheritance');

Route::resource('contact', 'ContactController');
Route::resource('administrative', 'AdministrativeController');
Route::resource('actividades', 'ActividadesController');

