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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users','UsersController');
});





Route::get('home','HomeController@index');
Route::resource('guichets','GuichetsController'); //Route pour un Guichet

Route::get('caisses','CaissseController@index');
Route::get('caisses/create','CaisseController@create');
Route::get('caisses/edit/{compte}','CaisseController@edit');
Route::get('caisses/{caisse}','CaisseController@show');
Route::post('caisses','CaisseController@store');
Route::post('caisses/destroy/{compte}','CaisseController@destroy');
Route::put('caisses/{caisse}','CaisseController@update');
Route::resource('caisses','CaisseController'); //Route pour une caisse

