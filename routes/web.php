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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('films', 'FilmsController');
Route::resource('categories', 'CategoriesController');
Route::get('categorie/{laCategorie}/films', 'FilmsController@index')->name('films.categorie');

Route::get('ajouterfilm', 'FilmsController@getInfos');
Route::post('ajouterfilm', 'FilmsController@postInfos');
