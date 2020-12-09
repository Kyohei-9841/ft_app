<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', [TopController::class, 'view'])->name('top');
// Route::get('/login', [LoginController::class, 'view'])->name('login');
// Route::get('/entry', [EntryController::class, 'view'])->name('entry');
// Route::get('/upload/{id}', [UploadController::class, 'view'])->name('upload');
// Route::get('/home/{id}', [HomeController::class, 'view'])->name('home');

// Route::post('/entry-submit', [EntryController::class, 'store'])->name('entry-submit');
// Route::post('/login-submit', [LoginController::class, 'login'])->name('login-submit');
// Route::post('/upload-submit', [UploadController::class, 'store'])->name('upload-submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
