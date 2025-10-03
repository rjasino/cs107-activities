<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get(
    '/customers/create',
    [CustomerController::class, 'create']
)->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
