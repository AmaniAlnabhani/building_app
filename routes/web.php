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
    //return 55;
    return view('welcome');
});
Route::view('issues','issues.index');
Route::post('/issues/store','IssuesController@store');
Route::get('test','IssuesController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('services','/layouts/services');
Route::get('custom/login','CustomAuthCountroller@login');
Route::get('custom/login/{id}','CustomAuthCountroller@CustomLogin');
Route::get('/issues/list','IssuesController@list');
Route::get('users','UserController@export');