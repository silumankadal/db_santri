<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PengaturanController;

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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('auth', [AuthController::class,  'login'])->name('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('santri', [SantriController::class, 'index'])->name('santri');
    Route::post('santri/store', [SantriController::class,  'store'])->name('santri.store');
    Route::post('santri/update/{id}', [SantriController::class,  'update'])->name('santri.update');
    Route::post('santri/destroy/{id}', [SantriController::class,  'destroy'])->name('santri.destroy');
    Route::get('santri/search', [SantriController::class,  'search'])->name('santri.search');
    Route::get('/pengaturan', [PengaturanController::class,  'index'])->name('pengaturan');
    Route::put('/pengaturan', [PengaturanController::class,  'update'])->name('pengaturan.update');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});