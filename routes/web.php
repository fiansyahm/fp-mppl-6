<?php

use App\Http\Controllers\MainUserController;
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

Route::get('mainUserUItest', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::resource('mainUserUI', MainUserController::class);

// Route::resource('mainAdminUI', ;
