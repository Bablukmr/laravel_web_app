<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicessController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/faq', [HomeController::class,'faq']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/services', [ServicessController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);

Route::get('/admin/login', [AdminLoginController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login',[AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/login',[AdminLoginController::class, 'authenticate'])->name('admin.auth');
    });

    Route::group(['middleware' => 'admin.auth'], function () {

        // Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');

        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[AdminLoginController::class,'logout'])->name('admin.logout');

        Route::get('/servicess/create',[ServiceController::class,'create']);
    });
});
