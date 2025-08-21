<?php

use Illuminate\Support\Facades\Route;

// Ruta temporal comentada - Landing page oculta
// Route::get('/', function () {
//     return view('welcome');
// });

// Nueva ruta de cotización con autenticación
Route::get('/', [App\Http\Controllers\QuoteController::class, 'showLogin'])->name('quote.login');
Route::post('/quote-login', [App\Http\Controllers\QuoteController::class, 'authenticate'])->name('quote.authenticate');
Route::get('/cotizacion', [App\Http\Controllers\QuoteController::class, 'index'])->name('quote.index')->middleware('quote.auth');
