<?php

use Illuminate\Support\Facades\Route;
// New Routes
use App\Http\Controllers\TaskController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;






Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
    Route::get('/tasks', function () {
        return view('task');
    });
    Route::get('/cases', function () {
        return view('case');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // مسارات المهام
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// مسارات القضايا
Route::get('/cases', [CaseController::class, 'index'])->name('cases.index');
Route::get('/cases/create', [CaseController::class, 'create'])->name('cases.create');
Route::post('/cases', [CaseController::class, 'store'])->name('cases.store');

    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    

    



Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('cases', CaseController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('sessions', SessionController::class);
});

