<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EstimasiController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\ProdukEstimasiContoller;
use App\Http\Controllers\user\TeamController;
use App\Http\Controllers\user\PetunjukController;
use App\Http\Controllers\user\EstimasiController as esController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/petunjuk', [PetunjukController::class, 'index']);
Route::get('/Produk', [ProdukEstimasiContoller::class, 'index']);
Route::get('/Developer', [TeamController::class, 'index']);
Route::get('/Estimasi', [esController::class, 'index']);
Route::post('/estimasi', [esController::class, 'hasil']);
Route::post('/register-estimasi', [esController::class, 'register']);


Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/dashboard/bulan', [DashboardController::class, 'bulan']);
    Route::get('/admin/dashboard/tahun', [DashboardController::class, 'tahun']);
    Route::get('/admin/estimasi', [EstimasiController::class, 'index']);
    Route::post('/admin/estimasi/hasil', [EstimasiController::class, 'hasil']);
    Route::get('/admin/bahan-formula', [EstimasiController::class, 'bahan']);
    Route::post('/admin/bahan/create', [EstimasiController::class, 'bahanCreate']);
    Route::post('/admin/bahan/hapus/{id}', [EstimasiController::class, 'bahanHapus']);
    Route::post('/admin/formula/create', [EstimasiController::class, 'formulaCreate']);
    Route::resource('/admin/produk', ProdukController::class);
    Route::resource('/admin/kategori', CategoryController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
