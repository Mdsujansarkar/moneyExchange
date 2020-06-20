<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/',						'FrontPageController@index')		->name('index');
Route::get('/client/registration',	'FrontPageController@registration') ->name('registration');
Route::get('/client/login',			'FrontPageController@login') 		->name('login');

Route::post('/client/registration', 'FrontPageController@moneyChange')  ->name('money.change');

/**
 * Registration controller
 */
Route::post('/client/registration1',  'RegistrationController@index')->name('customer.registration');
Route::post('/client/login',  		 'RegistrationController@login')->name('login.customer');