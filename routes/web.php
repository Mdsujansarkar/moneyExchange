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



Route::get('/',						'FrontPageController@index')				->name('index');
Route::get('/page/registration',	'FrontPageController@registration') 		->name('registration');
Route::get('/client/login',			'FrontPageController@login') 				->name('client.login');

Route::post('/page/registration', 	'FrontPageController@moneyChange')  		->name('money.change');

/**
 * Registration controller
 */
Route::post('/complite/registration','RegistrationController@index')			->name('customer.registration');
Route::post('/client/login',  		 'RegistrationController@login')			->name('login.customer');
Route::get('/confirm/order',		 'RegistrationController@confirmOrder')		->name('confirm.order');
Route::post('/confirm/thanks',		 'RegistrationController@confirm')			->name('confirm');


Route::group(['middleware' => ['exchange']], function () {
/**
 * Backend code
 */
Route::get('order/change/{id}',		 'BackandController@orderChange')			->name('view.order.change');
Route::get('order/unchange/{id}',	 'BackandController@orderUnChange')			->name('view.order.unchange');
Route::get('add/change',	 		 'BackandController@addChange')				->name('add.change');
Route::post('add/change/money',	 	 'BackandController@changeMoney')			->name('add.money.change');
Route::get('/change/manage',	 	 'BackandController@changeManage')			->name('manage.change');
Route::get('/change/unpublish/{id}', 'BackandController@changeUnpublish')		->name('unpublished.change');
Route::get('/change/publish/{id}',   'BackandController@changePublish')			->name('published.change');
Route::get('/change/edit/{id}',   	 'BackandController@changeEdit')			->name('edit.change');
Route::post('/change/edit/',   	 	 'BackandController@changeUpdate')			->name('new.money.change');
Route::get('/change/delete/{id}',    'BackandController@changeDelete')			->name('delete.change');

// Route::get('/complite/status',		 'BackandController@orderComplite')		->name('order.complite.status');

Route::get('/backends', 'HomeController@index')->name('home');
});
Auth::routes();
