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
    Route::resource('action', \App\Http\Controllers\ActionController::class)->names('action');

    Route::get('role/create', [\App\Http\Controllers\RolePermission::class,'create'])->name('role.create');
    Route::post('role', [\App\Http\Controllers\RolePermission::class,'store'])->name('role.store');
    Route::get('role', [\App\Http\Controllers\RolePermission::class,'index'])->name('role.index');
    Route::get('role/{id}/edit', [\App\Http\Controllers\RolePermission::class,'edit'])->name('role.edit');
    Route::delete('role/{id}', [\App\Http\Controllers\RolePermission::class,'destroy'])->name('role.destroy');
    Route::put('role/{id}', [\App\Http\Controllers\RolePermission::class,'update'])->name('role.update');



    Route::get('permission/create', [\App\Http\Controllers\RolePermission::class,'permission_create'])->name('role.permission_create');
    Route::post('permission', [\App\Http\Controllers\RolePermission::class,'permission_store'])->name('role.permission_store');
    Route::get('permission', [\App\Http\Controllers\RolePermission::class,'permission_index'])->name('role.permission_index');
    Route::get('permission/{id}/edit', [\App\Http\Controllers\RolePermission::class,'permission_edit'])->name('role.permission_edit');
    Route::delete('permission/{id}', [\App\Http\Controllers\RolePermission::class,'permission_destroy'])->name('role.permission_destroy');
    Route::put('permission/{id}', [\App\Http\Controllers\RolePermission::class,'permission_update'])->name('role.permission_update');
});
