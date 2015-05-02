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
	'as' => 'home', 'uses' => 'HomeController@about',
]);

Route::get('/about-us', [
	'as' => 'about', 'uses' => 'HomeController@about',
]);

Route::get('/what-we-do', [
	'as' => 'what_we_do', 'uses' => 'HomeController@whatWeDo',
]);

Route::get('/entrepreneurship', [
	'as' => 'entrepreneurship', 'uses' => 'HomeController@entrepreneurship',
]);

Route::get('/engagement', [
	'as' => 'engagement', 'uses' => 'HomeController@engagement',
]);

Route::get('/how-to-help', [
	'as' => 'how_to_help', 'uses' => 'HomeController@howToHelp',
]);

Route::get('/success-stories', [
	'as' => 'success_stories', 'uses' => 'HomeController@successStories',
]);

Route::get('/photovoici', [
	'as' => 'photovoici', 'uses' => 'HomeController@photovoici',
]);

Route::get('/partners', [
	'as' => 'partners', 'uses' => 'HomeController@partners',
]);
