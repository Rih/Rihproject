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

Route::get('/home', 'HomeController@index');


Route::resource('users','UserController');
//Route::get('/users', 'UserController@index');

Route::resource('websites','WebsiteController');


//Route::get('websites', 'WebsiteController@index')->name('websites');

Route::get('/datatables',['uses'=>'DatatablesController@getIndex', 'as' => 'datatables']);
Route::get('datatables/{data}',['uses'=>'DatatablesController@anyData', 'as' => 'datatables.data']);

//Route::get('/services', 'WebsiteController@index');
