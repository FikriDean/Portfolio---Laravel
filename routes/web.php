<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CommentProjectController;
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

// About Route
// Route::get('/about', [AboutController::class, 'index']);

// Certificates Route
Route::resource('/certificates', CertificateController::class, [
  'names' => [
    'index' => 'certificates',
  ]
]);

// Projects Route
Route::resource('/projects', ProjectController::class, [
  'names' => [
    'index' => 'projects',
  ]
]);

// Comment Route
Route::resource('/comment', CommentController::class)->middleware(['auth', 'verified']);

// CommentProject Route
Route::resource('/commentproject', CommentProjectController::class)->middleware(['auth', 'verified']);

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

// Dashboard User Route
Route::resource('/dashboard/user', DashboardUserController::class)->middleware(['auth']);

// Dashboard Admin Certificate Route
Route::resource('/dashboard/admin/certificates', AdminCertificateController::class)->middleware('admin');

// Dashboard Admin Projects Route
Route::resource('/dashboard/admin/projects', AdminProjectController::class)->middleware('admin');

// Dashboard Admin Categories Route
Route::resource('/dashboard/admin/categories', AdminCategoryController::class)->middleware('admin');

// Dashboard Admin Users Route
Route::resource('/dashboard/admin/users', AdminUserController::class)->middleware('admin');

require __DIR__ . '/auth.php';
