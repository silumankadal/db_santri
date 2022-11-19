<?php

use App\Models\Santri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

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
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('santri', [SantriController::class, 'index'])->name('santri');
Route::post('santri/store', [SantriController::class,  'store'])->name('santri.store');
Route::post('santri/update/{id}', [SantriController::class,  'update'])->name('santri.update');
Route::post('santri/destroy/{id}', [SantriController::class,  'destroy'])->name('santri.destroy');
Route::get('santri/search', [SantriController::class,  'search'])->name('santri.search');