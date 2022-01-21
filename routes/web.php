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

// Auth
Auth::routes();
Route::get('/admin/login', [App\Http\Controllers\Administrator\AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/logins', [\App\Http\Controllers\Administrator\AdminLoginController::class, 'login'])->name('login_admin');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Administrator\AdminController::class, 'index'])->name('admin');
Route::get('/officer', [App\Http\Controllers\Officer\OfficerController::class, 'index'])->name('officer');
Route::get('/user', [App\Http\Controllers\User\UserController::class, 'index'])->name('user');
