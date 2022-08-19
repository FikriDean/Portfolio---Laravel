<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\AdminCertificateController;

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

// Home Route
Route::get('/', [HomeController::class, 'index']);

// Certificate Route
Route::resource('/certificates', CertificateController::class);

// Register Route
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'registerSubmit'])->name('register')->middleware('guest');

// Login Route
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Comment Route
Route::resource('/comment', CommentController::class)->middleware('auth');

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Dashboard User Route
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');

// Dashboard Admin Certificate Route
Route::resource('/dashboard/admin/certificates', AdminCertificateController::class)->middleware('admin');

// Dashboard Admin Categories Route
Route::resource('/dashboard/admin/categories', AdminCategoryController::class)->middleware('admin');

// Dashboard Admin Users Route
Route::resource('/dashboard/admin/users', AdminUserController::class)->middleware('admin');
