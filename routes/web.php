<?php

use App\Http\Controllers\AdminController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// photo Controller
Route::resource('/portfolio', PhotoController::class);
Route::get('/food', [PhotoController::class, 'food']);
Route::get('/drink', [PhotoController::class, 'drink']);
Route::get('/mygear', [PhotoController::class, 'gear']);

// Admin Controller
Route::get('/admin', [AdminController::class, 'photo'])->middleware('auth');
Route::get('/create', [AdminController::class, 'create']);
Route::post('/register', [AdminController::class, 'addadmin'])->middleware('auth');
