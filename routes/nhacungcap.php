<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhaCungCapController;

Route::get('/nhacungcap', [NhaCungCapController::class, 'index'])->name('nhacungcap.index');
Route::get('/nhacungcap/congiaodich', [NhaCungCapController::class, 'showcongiaodich'])->name('nhacungcap.showcongiaodich');
Route::get('/nhacungcap/ngunggiaodich', [NhaCungCapController::class, 'showngunggiaodich'])->name('nhacungcap.showngunggiaodich');
Route::get('/nhacungcap/create', [NhaCungCapController::class, 'create'])->name('nhacungcap.create');
Route::post('/nhacungcap/store', [NhaCungCapController::class, 'store'])->name('nhacungcap.store');
Route::get('/nhacungcap/{id}/edit', [NhaCungCapController::class, 'edit'])->name('nhacungcap.edit');
Route::put('/nhacungcap/{id}/update', [NhaCungCapController::class, 'update'])->name('nhacungcap.update');
Route::put('/nhacungcap/{id}/delete', [NhaCungCapController::class, 'destroy'])->name('nhacungcap.delete');
Route::put('/nhacungcap/{id}/trangthai', [NhaCungCapController::class, 'CapNhatTrangThaiNhaCungCap'])->name('nhacungcap.CapNhatTrangThai');