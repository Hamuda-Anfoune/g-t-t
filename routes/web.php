<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;
use App\Http\Controllers\CalorificDataController;
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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [CalorificDataController::class, 'index'])->name('home');
// Route::get('/home', 'App\Http\Controllers\CalorificDataController@index')->name('home');

Route::get('/download', [CalorificDataController::class, 'fetch'])->name('download');
