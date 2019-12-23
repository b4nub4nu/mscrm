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
    //return view('welcome');
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/sucofindo/ceklist_sucofindo', 'Auth\Sucofindo\Ceklist_sucofindoController@index')->name('ceklist_sucofindo');


Route::post('auth/sucofindo/ceklist_sucofindo/tambah', 'Auth\Sucofindo\Ceklist_sucofindoController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

// Route::get('/', function () {
//     //return view('welcome');
//     return view('tambah');
// });