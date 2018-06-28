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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'library','namespace' => 'library',], function () {
      Route::get('/', 'libraryController@library')->name('library.index');
      Route::resource('/book','bookController');
      Route::resource('/genre','genreController');
      Route::resource('/author','authorController');
  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
