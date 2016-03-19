<?php

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

    Route::get('/', function () {
        return view('home');
    });

    Route::get('login', 'UsersController@getLogin');

    Route::get('logout', 'UsersController@logout');

    Route::post('login', 'UsersController@login');

    Route::get('games/{id}', 'GamesController@index');
});
