<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;

route::get('/',[HomeController::class,'home']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//superadmin auth login

Route::get('superadmin/dashboard', [SuperAdminController::class, 'index'])->middleware(['auth','super-admin']);


//admin auth login

Route::get('admin/dashboard',[AdminController::class,'index'])->middleware(['auth','admin']);


//employer auth login

Route::get('employer/dashboard',[EmployerController::class,'index'])->middleware(['auth','employer']);


//alumni auth login

Route::get('alumni/dashboard',[AlumniController::class,'index'])->middleware(['auth','alumni']);







