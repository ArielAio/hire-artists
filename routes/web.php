<?php

use App\Http\Controllers\ArtistaController; // Import the ArtistaController

use Illuminate\Support\Facades\Route; // Import the Route facade

Route::get('/', [ArtistaController::class, 'welcome'])->name('artistas.welcome'); // Route for the welcome page

Route::prefix('artistas')->group(function () { // Group routes under '/artistas'
    Route::get('/', [ArtistaController::class, 'index'])->name('artistas.index'); // Route for listing artists
    Route::get('/create', [ArtistaController::class, 'create'])->name('artistas.create'); // Route for displaying the create form
    Route::post('/', [ArtistaController::class, 'store'])->name('artistas.store'); // Route for storing artist data
    Route::get('/{id}/edit', [ArtistaController::class, 'edit'])->where('id', '[0-9]+')->name('artistas.edit'); // Route for displaying the edit form
    Route::put('/{id}', [ArtistaController::class, 'update'])->where('id', '[0-9]+')->name('artistas.update'); // Route for updating artist data
    Route::get('/search', [ArtistaController::class, 'search'])->name('artistas.search'); // Route for searching artists
    Route::get('/contratar/{id}', [ArtistaController::class, 'contratar'])->name('artistas.contratar'); // Route for displaying the hiring form
    Route::post('/sucesso', [ArtistaController::class, 'cadastro'])->name('artistas.sucesso'); // Route for confirming hiring
});

Route::get('/artistas/lista', [ArtistaController::class, 'lista'])->name('artistas.lista'); // Route for listing hired artists
Route::delete('/artistas/{id}', [ArtistaController::class, 'destroy'])->where('id', '[0-9]+')->name('artistas.destroy'); // Route for deleting an artist

Route::fallback(function () { // Fallback route for handling undefined routes
    return response("Erro ao localizar sua rota!", 404); // Return a 404 response
});