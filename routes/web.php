<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// New Routes
use App\Http\Controllers\TaskController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SessionController;

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('cases', CaseController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('sessions', SessionController::class);
});

