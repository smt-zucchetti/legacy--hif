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
**/

Route::get('createNewUser/{formType}', 'FormController@createNewUser');

Route::get('startNewSession/{userToken}', [
	'uses' => 'FormController@startNewSession',
	'as' => 'startNewSession'
]);

Route::get('page/{page_no}', [
    	'uses' => 'FormController@showformPage',
    	'as'	=> 'getPage'
]);
Route::post('page/{page_no}', [
    	'uses' => 'FormController@showformPage',
    	'as'	=> 'getPage'
]);

Route::post('complete', [
	'uses' => 'FormController@showThankYouPage',
	'as'	=> 'thankYouPage'
]);

Route::get('logout', 'FormController@logout');

//Old URL format
Route::get('newUser/{formType}', 'FormController@createNewUser');

Route::post('newUserToken/{formType}', 'FormController@createNewUser');

Route::get('startSession/{formType}/{userToken}', 'FormController@startSession');


//version 2.0 
Route::get('runDBUpdate', ['uses' => 'FormController@runDBUpdate']);

Route::get("forms_debug", "FormController@forms_debug");

Route::get("layout_test", "FormController@layout_test");



Route::post('savePage/{page_no}', 'FormController@_savePage');

