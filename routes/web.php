<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;

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




Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/categories', 'category');
    Route::get('/categories/{category:name}' , 'showCategory')->name('category.show');
});
//authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'indexLog'])->name('login');
    Route::get('/register', [AuthController::class, 'indexReg']);
    Route::post('/register', [AuthController::class, 'store'])->name('register.store');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});








Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('profile')->group(function () {
        Route::get('{user}', ProfileController::class);

        Route::get('password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
        Route::put('password/update', [UpdatePasswordController::class, 'update'])->name('password.update');
    });
});

Route::middleware('auth','role:admin,petugas')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/students' , StudentController::class);
    Route::resource('/categories' , CategoryController::class);
});

