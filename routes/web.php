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

route::get('/index','PetugasController@index') ->name('index');
route::get('/Petugas/create','PetugasController@create') ->name('Petugas.create');
route::post('/Petugas/store','PetugasController@store') ->name('Petugas.store');
route::put('/Petugas/update/{Id_petugas}','PetugasController@update') ->name('Petugas.update');
route::get('/Petugas/edit/{Id_petugas}','PetugasController@edit') ->name('Petugas.edit');
route::get('/Petugas/destroy/{Id_petugas}','PetugasController@destroy') ->name('Petugas.destroy');
Auth::routes();

Route::get('/home', 'PetugasController@index')->name('home');
Route::get('/ppl', 'pplController@index')->name('ppl');