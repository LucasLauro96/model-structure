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
    return view('index');
});

Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    Route::get('/login', function () {
        return view('admin.login.index');
    })->name('admin.login');

    /* Pessoas - Persons */
    Route::resource('pessoas', 'App\Http\Controllers\personController');

    Route::post('/login', 'App\Http\Controllers\authController@auth')->name('admin.login');

});