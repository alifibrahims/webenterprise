<?php

use App\Http\Controllers\pert2controller;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('pert2', function () {
    return view('pert2');
});
*/
Route::get('/home', [pert2Controller::class, 'viewHome']);
Route::get('/produk', [ProdukController::class, 'ViewProduk']);
Route::get('/produk/add', [ProdukController::class, 'ViewAddProduk']);
Route::get('/produk/add', [ProdukController::class, 'CreateProduk']);

Route::delete('/produk/delete/{kode_produk}', [ProdukController::class, 'DeleteProduk']);
