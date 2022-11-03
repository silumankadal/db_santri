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

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/santri', [SantriController::class, 'index']);

Route::get('santri/{data:slug}', [SantriController::class, 'show']);

Route::get('/add', function(){
    return view('add',[
        "title" => "tambah santri"
    ]);
});

