<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'getallStudent'])->middleware(['auth', 'verified'])->name('index');
Route::middleware(['auth', 'verified', 'checkRole:1'])->group(function () { 
    Route::get('/dashboard', [UserController::class, 'indexDashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('student', StudentController::class);
});


require __DIR__ . '/auth.php';
