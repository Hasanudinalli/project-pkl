<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BeliController;


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

Auth::routes(
    [
        'register' => false, //menghilangkan fitur regis
        'reset' => false, //menghilangkan fitur forgot
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' =>
//     ['auth',
//         'role:admin',
//     ]], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

// Route::group(['prefix' => 'pengguna', 'middleware' =>
//     ['auth',
//         'role:pengguna',
//     ]], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });

// Route::group(['prefix' => 'pembelian', 'middleware' =>
//     ['auth',
//         'role:admin|kasir',
//     ]], function () {
//     Route::get('/', function () {
//         return 'halaman pembelian';
//     });

//     Route::get('laporan', function () {
//         return 'halaman laporan pembelian';
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('buku', function () {
        return view('buku.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('pengarang', function () {
        return view('pengarang.index');
    })->middleware(['role:admin']);



    Route::get('produk', function () {
        return view('produk.index');
    })->middleware(['role:admin|pengguna']);

    Route::resource('produk', ProdukController::class);

    Route::get('transaksi', function () {
        return view('transaksi.index');
    })->middleware(['role:admin|pengguna']);
    Route::resource('transaksi', TransaksiController::class);

    Route::get('beli', function () {
        return view('beli.index');
    })->middleware(['role:admin|pengguna']);
    Route::resource('beli', BeliController::class);




});
