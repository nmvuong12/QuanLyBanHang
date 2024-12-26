<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiHangController;

Route::get('/loaihang', [LoaiHangController::class, 'index'])->name('loaihang.index');
Route::get('/loaihang/create', [LoaiHangController::class, 'create'])->name('loaihang.create');
Route::post('/loaihang/store', [LoaiHangController::class, 'store'])->name('loaihang.store');
Route::get('/loaihang/{id}/edit', [LoaiHangController::class, 'edit'])->name('loaihang.edit');
Route::put('/loaihang/{id}/update', [LoaiHangController::class, 'update'])->name('loaihang.update');
Route::put('/loaihang/{id}/delete', [LoaiHangController::class, 'destroy'])->name('loaihang.delete');