<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;

Route::get('/factura', [FacturaController::class, 'index'])->name('factura.index');
Route::get('/factura/create', [FacturaController::class, 'create'])->name('factura.create');
Route::post('/factura/store',[FacturaController::class, 'store'])->name('factura.store');
Route::get('/factura/edit/{factura}', [FacturaController::class, 'edit'])->name('factura.edit');
Route::put('/factura/update/{factura}', [FacturaController::class, 'update'])->name('factura.update');
Route::get('/factura/show/{factura}', [FacturaController::class, 'show'])->name('factura.show');
Route::delete('/factura/destroy/{factura}', [FacturaController::class, 'destroy'])->name('factura.destroy');
