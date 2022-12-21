<?php
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peminjaman;


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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/peminjaman', [PeminjamanController::class, 'userShow']);
Route::get('/peminjaman/mohon', [PeminjamanController::class, 'userMohon']);
Route::get('/peminjaman/simpan', [PeminjamanController::class, 'userSimpan']);