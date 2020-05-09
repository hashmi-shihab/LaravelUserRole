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
    return view('publicView.welcome');
});

//landClass route
Route::resource('landClass', 'LandClassController');


//landType route
Route::resource('landType', 'LandTypeController');

//texture route
Route::resource('texture', 'TextureController');

//cultivation route
Route::resource('cultivationType', 'CultivationTypeController');

//state route
Route::resource('state', 'StateController');

//soilNutrition route
Route::resource('soilNutrition', 'SoilNutritionController');

//role
Route::resource('roles', 'RoleController');

//user
Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



