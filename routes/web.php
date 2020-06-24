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
Route::get('/page/registration',	'FrontPageController@registration') ->name('registration');
Route::get('/client/login',			'FrontPageController@login') 		->name('client.login');

Route::post('/page/registration', 	'FrontPageController@moneyChange')  ->name('money.change');

/**
 * Registration controller
 */
Route::post('/complite/registration','RegistrationController@index')->name('customer.registration');
Route::post('/client/login',  		 'RegistrationController@login')->name('login.customer');
Route::get('/confirm/order',		 'RegistrationController@confirmOrder')->name('confirm.order');
Route::post('/confirm/thanks',		 'RegistrationController@confirm')->name('confirm');


Route::group(['middleware' => ['exchange']], function () {
/**
 * Backend code
 */
Route::get('order/change/{id}',		 'BackandController@orderChange')->name('view.order.change');

Route::get('/complite/status',		 'BackandController@orderComplite')		->name('order.complite.status');

Route::get('/backends', 'HomeController@index')->name('home');
});
Auth::routes();
