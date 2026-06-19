<?php

use App\Http\Controllers\OilChangeCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OilChangeCheckController::class, 'index'])->name('oil-change.form');
Route::post('/check', [OilChangeCheckController::class, 'store'])->name('oil-change.store');
Route::get('/result/{oilChangeCheck}', [OilChangeCheckController::class, 'show'])->name('oil-change.result');