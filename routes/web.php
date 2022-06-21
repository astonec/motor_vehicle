<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PaymentsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'home'); 
Route::get('/vehicles', 'App\Http\Controllers\VehicleController@index'); 
Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::get('/logout', 'Auth\AuthController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'dashboard'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('payments/create/{id}', 'App\Http\Controllers\PaymentsController@create');
    Route::resource('payments', 'App\Http\Controllers\PaymentsController')->except('create');
});
