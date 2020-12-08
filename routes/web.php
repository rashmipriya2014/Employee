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
});

Route::post('/add_emp', 'HomeController@addEmp')->name('add_emp');
Route::get('/all_emp', 'HomeController@listEmp')->name('all_emp');
Route::get('/show_emp/{id}', 'HomeController@showEmp')->name('show_emp');
Route::post('/upadteDetails/{id}', 'HomeController@upadteDetails')->name('upadteDetails');
