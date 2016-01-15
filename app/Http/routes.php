<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('test');
});
Route::get('/chris', function () {
    return view('chris');
});
Route::get('/users', 'UsersController@index');
Route::get('/profile',
    ['as' => 'get_profile', 'uses' => 'Profile@index']);

Route::post('/profile',
    ['as' => 'profile_store', 'uses' => 'Profile@store']);
Route::get('/chris2',  'ChrisController@chris2');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
