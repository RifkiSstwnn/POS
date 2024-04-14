<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanoController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kategori', [KategoriController::class,'index']);
Route::post('/kategori', [KategoriController::class,'store']);
Route::get('/kategori/create', [KategoriController::class,'create']);
Route::get('/kategori/edit/{id}',[KategoriController::class,'edit']);
Route::put('/kategori/{id}',[KategoriController::class,'update']);
Route::post('/kategori',[KategoriController::class,'store']);
Route::get('/kategori/delete/{id}',[KategoriController::class,'delete']);

Route::get('/user', [UserController::class,'index']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class,'store']);
Route::get('/user/edit/{id}', [UserController::class,'edit']);
Route::put('/user/update/{id}', [UserController::class,'update']);
Route::get('/user/delete/{id}', [UserController::class,'delete']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/create', [LevelController::class, 'create']);
Route::post('/level/store', [LevelController::class, 'store']);
Route::put('/level/update/{id}', [LevelController::class, 'update']); 
Route::get('/level/delete/{id}', [LevelController::class, 'delete']); 

// m_user
Route::resource('m_user', POSController::class);


// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [ProductController::class,'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class,'beautyHealth']);
//     Route::get('/home-care', [ProductController::class,'homeCare']);
//     Route::get('/baby-kid', [ProductController::class,'babyKid']);
// });

// Route::get('/user/{id}/name/{name}', [UserController::class,'show']);

// Route::get('/penjualan', [PenjualanoController::class,'index']);


// Route::get('/level', [LevelController::class,'index']);
// Route::get('/kategori', [KategoriController::class,'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);