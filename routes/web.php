<?php 

use App\Http\Controllers\SkemaController;
use App\Http\Controllers\PesertaController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Skema
Route::get('/skema', [SkemaController::class, 'index'])->name('skema.index');
Route::get('/skema/create', [SkemaController::class, 'create'])->name('skema.create');
Route::post('/skema', [SkemaController::class, 'store'])->name('skema.store');
Route::get('/skema/{id}/edit', [SkemaController::class, 'edit'])->name('skema.edit');
Route::put('/skema/{id}', [SkemaController::class, 'update'])->name('skema.update');
Route::delete('/skema/{id}', [SkemaController::class, 'destroy'])->name('skema.destroy');
Route::get('/skema/search', [SkemaController::class, 'search'])->name('skema.search');

// Rute untuk Peserta
Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('/peserta', [PesertaController::class, 'store'])->name('peserta.store');
Route::get('/peserta/{id}/edit', [PesertaController::class, 'edit'])->name('peserta.edit');
Route::put('/peserta/{id}', [PesertaController::class, 'update'])->name('peserta.update');
Route::delete('/peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');
Route::get('/peserta/search', [PesertaController::class, 'search'])->name('peserta.search');
