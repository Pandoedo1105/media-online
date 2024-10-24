<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


# Admin
# Kategori
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/kategori', [KategoriController::class, 'index']);
Route::get('/admin/kategori/tambah', [KategoriController::class, 'tambah']);
Route::post('/admin/kategori/simpan', [KategoriController::class, 'simpan']);
Route::get('/admin/kategori/edit/{id_kategori}', [KategoriController::class, 'edit']);
Route::post('/admin/kategori/update/{id_kategori}', [KategoriController::class, 'update']);
Route::get('/admin/kategori/hapus/{id_kategori}', [KategoriController::class, 'hapus']);

#Berita
Route::get('/admin', [BeritaController::class, 'index']);
Route::get('/admin/berita', [BeritaController::class, 'index']);
Route::get('/admin/berita/tambah', [BeritaController::class, 'tambah']);
Route::post('/admin/berita/simpan', [BeritaController::class, 'simpan']);
Route::get('/admin/berita/edit/{id_berita}', [BeritaController::class, 'edit']);
Route::post('/admin/berita/update/{id_berita}', [BeritaController::class, 'update']);
Route::get('/admin/berita/hapus/{id_berita}', [BeritaController::class, 'hapus']);
Route::get('/admin/berita/set-headline/{status}/{id_berita}', [BeritaController::class, 'set_headline']);
Route::get('/admin/berita/set-berita-pilihan/{status}/{id_berita}', [BeritaController::class, 'set_berita_pilihan']);


// Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/post/{id_berita}', [FrontendController::class, 'detail_berita']);
Route::get('/kategori/{id_kategori}', [FrontendController::class, 'kategori']);
Route::get('/indeks', [FrontendController::class, 'indeks']);