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
use App\Http\PetController;

// home page
Route::get('/', function () {
    return view('home');
});

// about
Route::get('/about/company', function () {
    return view('about_company');
});

Route::get('/about/application', function () {
    return view('about_application');
});

//-----------------------------------------pet--------------------------------------------------
Route::get('/pets', 'PetController@index')->name('pets');

Route::get('/pets/create', 'PetController@create')->name('create_pet');
Route::post('/pets/create', 'PetController@store')->name('store_pet');

Route::get('/pets/{petId}', 'PetController@show')->name('edit_pet');
Route::post('/pets/{petId}', 'PetController@update')->name('update_pet');

Route::get('/pets/delete/{petId}', 'PetController@destroy')->name('delete_pet');

// calculator
Route::get('/calculator', 'PetController@calculator')->name('calculator');
Route::post('/calculator', 'PetController@calculate')->name('calculate');


// statistics
Route::get('/statistics', 'PetController@statistics')->name('statistics');
Route::post('/statistics', 'PetController@statisticsCal')->name('statisticsCal');

// export to csv
Route::get('/export', 'PetController@export')->name('export');
