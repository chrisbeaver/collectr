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

Route::group(['domain' => '{campaign}.'.env('APP_DOMAIN')], function() {
	Route::get('/', 'CampaignController@showLandingPage');
	Route::get('complete', 'CampaignController@showConfirmationPage');

	Route::post('/', 'CampaignController@saveEmailAddress');
});
