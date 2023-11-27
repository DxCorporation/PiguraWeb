<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EstimasiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/estimasi', [EstimasiController::class, 'index']);
