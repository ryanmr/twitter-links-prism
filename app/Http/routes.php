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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', [
      'as' => 'home',
      'uses' => 'HomeController@index']);

    Route::get('auth/twitter', [
      'as' => 'twitter.redirect',
      'uses' => 'TwitterController@redirectToProvider'
    ]);
    Route::get('auth/twitter/callback', [
      'as' => 'twitter.callback',
      'uses' => 'TwitterController@handleProviderCallback'
    ]);
    Route::get('auth/twitter/error', [
      'as' => 'twitter.error',
      'uses' => 'TwitterController@handleError'
    ]);
});
