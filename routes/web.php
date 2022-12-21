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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/kontak_admin', function () {
    return view('kontak_admin');
});
Route::get('/peminjaman', [PeminjamanController::class, 'userShow']);
Route::get('/peminjaman/mohon', [PeminjamanController::class, 'userMohon']);
Route::post('/peminjaman/simpan', [PeminjamanController::class, 'userSimpan']);
Route::delete('/peminjaman/delete/{id_pinjam}', [PeminjamanController::class, 'userBatalkan'])->name('peminjaman.destroy');


Route::get('/peminjamanadmin', [PeminjamanController::class, 'adminShow']);