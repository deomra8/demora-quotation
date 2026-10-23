<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
Route::post('/submitlogin', [AdminAuthController::class, 'submitLogin'])->name('login.submit');

Route::middleware('auth')->as('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/logout', [AdminAuthController::class, 'logout'])
        ->name('logout');

    Route::resource('/companies', CompanyController::class)->names('companies');
    
});
