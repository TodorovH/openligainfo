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
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/about', 'PagesController@about');

Route::resource('matches', 'MatchesController');
Route::resource('gamedays', 'GamedaysController');
Route::resource('seasons', 'SeasonsController');
Route::resource('teams', 'TeamsController');

Auth::routes();
