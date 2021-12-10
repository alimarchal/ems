<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ \App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('employee', \App\Http\Controllers\EmployeeController::class)->names('employee');
    Route::resource('legalcase', \App\Http\Controllers\LegalCaseController::class)->names('legalcase');
    Route::resource('leave', \App\Http\Controllers\LeaveController::class)->names('leave');
});
