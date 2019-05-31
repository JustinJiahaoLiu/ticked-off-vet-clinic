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

// pet
Route::get('/pets', 'PetController@index')->name('pets');

Route::get('/pets/create', 'PetController@create')->name('create_pet');

Route::get('/pets/{petId}', 'PetController@show')->name('edit_pet');
