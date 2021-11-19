<?php

use App\Http\Controllers\PhotoController;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/portfolio', PhotoController::class);
Route::get('/food', [PhotoController::class, 'food']);
Route::get('/drink', [PhotoController::class, 'drink']);
