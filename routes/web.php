<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/admin', [AdminController::class, "index"])->name('admin');
Route::get('/admin/createplace', [AdminController::class, "createplace_get"])->name('createplace');
Route::post('/admin/createplace', [AdminController::class, "createplace_post"]);
Route::get('/admin/contact', [AdminController::class, "contact_get"])->name('contact');
Route::get('/admin', [AdminController::class, "index"])->name('admin');

Route::delete('/admin/deleteplace/{place}', [AdminController::class, "deleteplace"])->name("place");
Route::delete('/admin/connect/{connect}', [AdminController::class, "delete_connect"])->name('delete_connect');

Route::get('/register', [RegisterController::class, "index"])->name('register');
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "store"]);

Route::post('/connect', [HomeController::class, "connect"])->name('connect');

Route::get('/privacy-policy', function(){return view("privacy-policy");})->name('privacy-policy');
Route::get('/terms-conditions', function(){return view("terms-conditions");})->name('terms-conditions');


Route::get('/', [HomeController::class, "index"])->name('home');
