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
// rotta x tutti i drink nel db
Route::get('/drinks', 'Maincontroller@index')
  -> name('drinks-index');
Route::get('/drink/{id}', 'Maincontroller@show')
  -> name('drink-show');
