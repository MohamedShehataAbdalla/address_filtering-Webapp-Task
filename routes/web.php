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


Route::get('/places', [App\Http\Controllers\PlaceController::class, 'index'])->name('places_index');
Route::post('/places/create', [App\Http\Controllers\PlaceController::class, 'store'])->name('form_store');

Route::get('/get_cities', [App\Http\Controllers\PlaceController::class, 'get_cities'])->name('get_cities');
Route::get('/get_districts', [App\Http\Controllers\PlaceController::class, 'get_districts'])->name('get_districts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
