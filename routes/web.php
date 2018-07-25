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


Route::group(['prefix' => 'library','namespace' => 'library', 'middleware' => ['auth'] ], function () {
      Route::get('/', 'libraryController@library')->name('library.index');
      Route::resource('/book','bookController');
      Route::resource('/genre','genreController');
      Route::resource('/author','authorController');
  });

Route::group(['prefix' => 'front','namespace' => 'front'], function () {
      Route::get('/', 'frontController@all')->name('front.index');
      Route::get('/{slug}', 'frontController@slug')->name('front.book');
     Route::get('/{s}/{d}', 'frontController@sort')->name('index.sort');
     Route::post('/filter', 'frontController@filter')->name('index.filter');
  });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
