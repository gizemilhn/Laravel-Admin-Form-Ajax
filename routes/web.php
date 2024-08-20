<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [AdminController::class, 'showForm'])->name('admin.form');

Route::post('/admin/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');

Route::get('/adminlist', [App\Http\Controllers\AdminController::class, 'showAdmins'])->name('admin.list');
Route::get('/form', [App\Http\Controllers\AdminController::class, 'showForm'])->name('admin.form');
