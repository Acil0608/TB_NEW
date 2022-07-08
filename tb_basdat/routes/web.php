<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\miniKHSController;
use App\Http\Controllers\crudTables\GuruController;
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




Route::name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('index', [miniKHSController::class, 'index'])->name('index');

    Route::resource('guru', GuruController::class)->shallow()->only([
        'index', 'create', 'store','edit','update', 'destroy'
    ]);

    // displaying tables
    Route::name('tables.')->prefix('tables')->group(function () {
        Route::get('pelajar', [miniKHSController::class, 'tables_pelajar'])->name('pelajar');
        Route::get('jurusan', [miniKHSController::class, 'tables_jurusan'])->name('jurusan');
        Route::get('jadwal', [miniKHSController::class, 'tables_jadwal'])->name('jadwal');
        Route::get('pelajaran', [miniKHSController::class, 'tables_pelajaran'])->name('pelajaran');
        Route::get('kelas', [miniKHSController::class, 'tables_kelas'])->name('kelas');
    });


});
