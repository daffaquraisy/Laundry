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
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/outlets', 'OutletController');

    Route::get('/ajax/users/search', 'UserController@ajaxSearch');
    Route::resource('/users', 'UserController');

    Route::resource('/members', 'MemberController');

    Route::get('/ajax/packets/search', 'PacketController@ajaxSearch');
    Route::resource('/packets', 'PacketController');
});
