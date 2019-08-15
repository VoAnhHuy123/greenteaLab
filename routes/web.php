<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('login', 'AuthController@login')->name('login');
Route::post('login', 'AuthController@doLogin')->name('login');
Route::post('signup', 'AuthController@doSignup')->name('signup');
Route::post('profile', 'AuthController@doProfile')->name('profile');
Route::get('logout','AuthController@doLogout')->name('logout');
Route::get('profile','AuthController@profile')->name('profile');
Route::group(['middleware'=>'authmiddleware'], function (){
	Route::get('ai', function (){
		return view('page.ai');
	})->name('ai');
});

Route::get('profile/edit','AuthController@editProfile')->name('editprofile');

