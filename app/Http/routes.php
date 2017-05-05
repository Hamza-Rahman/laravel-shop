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

Route::get('/', [
	'uses'=> 'productController@getIndex',
	'as'=> 'product.index'
	]);


Route::group(['prefix'=>'user'], function(){
	
	Route::get('/signup', [
	'uses' => 'userController@getSignup',
	'as'=> 'user.signup'
	]);
	
	Route::post('/signup', [
	'uses' => 'userController@postSignup',
	'as'=> 'user.signup'
	]);

	Route::get('/signin', [
	'uses' => 'userController@getSignin',
	'as'=> 'user.signin'
	]);

	Route::post('/signin', [
	'uses' => 'userController@postSignin',
	'as'=> 'user.signin'
	]);

	Route::get('/profile', [
	'uses' => 'userController@getProfile',
	'as'=> 'user.profile'
	]);

	Route::get('/logout', [
	'uses' => 'userController@getLogout',
	 'as' => 'user.logout'
	]);
});





