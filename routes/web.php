<?php

use App\Http\Controllers\AdminDetailKinerjaController;
use App\Http\Controllers\ListEvaluasiKinerjaAkunController;
use App\Http\Controllers\ListEvaluasiKinerjaController;
use App\Http\Controllers\TambahEvaluasiController;
use Illuminate\Support\Facades\Route;
use App\Models\Evaluasi;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');

//  $user = Auth::user();
//     $isAdmin = Auth::user()->isAdmin;
//     $unit_id = Auth::user()->id;
//     $list = Evaluasi::where('unit_id', $unit_id)
//                 ->get();
//     if($isAdmin==1){
//         return view('user.index', compact('user', 'list'));
//     }
//     else if($isAdmin==0){
//         return view('admin.index', compact('user', 'list'));
//     }
//     else{
//         return view('dashboard');
//     }
});

// sementara
Route::get('/detail1', function () {

    $user = Auth::user();
        return view('admin.detail1', compact('user'));
});

// Route::get('/dashboard', function () {
//     $user = Auth::user();
//     $isAdmin = Auth::user()->isAdmin;
//     $unit_id = Auth::user()->id;
//     $list = Evaluasi::where('unit_id', $unit_id)
//                 ->get();
//     if($isAdmin==1){
//         return view('user.index', compact('user', 'list'));
//     }
//     else if($isAdmin==0){
//         return view('admin.index', compact('user', 'list'));
//     }
//     else{
//         return view('dashboard');
//     }
// //    return view('dashboard');
// })->middleware(['auth'])->name('welcome');

require __DIR__.'/auth.php';


Route::group(['middleware' => 'auth'], function() {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [ListEvaluasiKinerjaAkunController::class, 'index']);
        Route::get('/tambah', [TambahEvaluasiController::class, 'index'])->name('tambah');
    });

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [ListEvaluasiKinerjaController::class, 'index']);
        Route::get('/detail/{id}', [AdminDetailKinerjaController::class, 'index'])->name('detail');
    });

});
