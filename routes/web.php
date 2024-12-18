<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SupportController;

// Customer Support Form
Route::get('/support', [SupportController::class, 'create'])->name('support.create');
Route::post('/support', [SupportController::class, 'store'])->name('support.store');

// Admin View to List Inquiries
Route::get('/admin/support', [SupportController::class, 'index'])->name('support.index');
