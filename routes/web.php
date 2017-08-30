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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about_us');
Route::get('/ponuda', 'PagesController@ponuda');
Route::get('/kontakt', 'PagesController@kontakt');

Route::group(['middleware'=>'visitors'], function(){
	Route::get('/register', 'RegistrationController@register');
	Route::post('/register', 'RegistrationController@postRegister');
	Route::get('/login', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');
	Route::get('/forgot-password', 'ForgotPasswordController@forgotPassword');
	Route::post('/forgot-password', 'ForgotPasswordController@postForgotPassword');
	Route::get('/reset/{email}/{resetCode}', 'ForgotPasswordController@resetPassword');
	Route::post('/reset/{email}/{resetCode}', 'ForgotPasswordController@postResetPassword');
});

Route::get('/logout', 'LoginController@logout');
Route::get('/admin', 'AdminController@admin')->middleware('admin');
Route::get('/proizvodnja', 'BasicController@proizvodnja')->middleware('basic');
Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');

