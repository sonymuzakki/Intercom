<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UsersController;
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
//     return view('dashboard');
// });
Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/users', [UsersController::class,'index'])->name('users');
//inventory
Route::get('/forminventaris', [InventoryController::class,'input'])->name('forminventaris');
Route::post('/tambahdata', [InventoryController::class,'tambah'])->name('tambahdata');

// Users
Route::get('/formusers', [UsersController::class,'index'])->name('formusers');
Route::post('/tambahusers', [UsersController::class,'tambah'])->name('tambahusers');
Route::get('/delete/{id}', [UsersController::class,'delete'])->name('delete');
Route::get('/details/{id}', [UsersController::class,'details'])->name('details');

// Route::post('/tambahusers', [UsersController::class,'tambahusers'])->name('tambahusers');

// data
Route::get('/datainven', [InventoryController::class,'datainven'])->name('datainven');
Route::get('/datausers', [UsersController::class,'datausers'])->name('datausers');