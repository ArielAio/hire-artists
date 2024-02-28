<?php

use App\Http\Controllers\ArtistaController;
use Illuminate\Support\Facades\Route;

Route::prefix('artistas')->group(function () {
    Route::get('/', [ArtistaController::class, 'index'])->name('artistas.index');
    Route::get('/create', [ArtistaController::class, 'create'])->name('artistas.create');
    Route::post('/', [ArtistaController::class, 'store'])->name('artistas.store');
    Route::get('/{id}/edit', [ArtistaController::class, 'edit'])->where('id', '[0-9]+')->name('artistas.edit');
    Route::put('/{id}', [ArtistaController::class, 'update'])->where('id', '[0-9]+')->name('artistas.update');
    Route::get('/search', [ArtistaController::class, 'search'])->name('artistas.search');
    Route::get('/contratar/{id}', [ArtistaController::class, 'contratar'])->name('artistas.contratar');
    Route::post('/sucesso', [ArtistaController::class, 'cadastro'])->name('artistas.sucesso');
});

Route::get('/artistas/lista', [ArtistaController::class, 'lista'])->name('artistas.lista');
Route::delete('/artistas/{id}', [ArtistaController::class, 'destroy'])->where('id', '[0-9]+')->name('artistas.destroy');

Route::fallback(function () {
    return response("Erro ao localizar sua rota!", 404);
});
