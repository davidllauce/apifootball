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

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('competitions', 'CompetitionsController@index')->name('competitions');
Route::get('competitions/{competition_id}', 'CompetitionsController@show')->name('detallecompetition');
Route::get('team/{team_id}', 'CompetitionsController@showteam')->name('detalleteamcompetition');
Route::get('/team', 'TeamsController@index')->name('teams');
Route::get('/players', 'PlayersController@index')->name('players');


