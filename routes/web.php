<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Middleware\SuperAdmin;

route::get('/',[HomeController::class,'home']);


route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');;



    // return view('dashboard'); first

// Route::get('/dashboard', function () {
//     return view('home.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//superadmin auth login
// start of superadmin auth 

Route::get('superadmin/dashboard', [SuperAdminController::class, 'index'])->middleware(['auth','super-admin']);

// end of superadmin auth & login 

// start of superadmin category

  # view 

Route::get('view_category', [SuperAdminController::class, 'view_category'])->middleware(['auth','super-admin']);

  #add

Route::post('add_category',[SuperAdminController::class,'add_category'])->middleware(['auth','super-admin']);

#delete

Route::get('delete_category/{id}',[SuperAdminController::class,'delete_category'])->middleware(['auth','super-admin']);

#edit

route::get('edit_category/{id}',[SuperAdminController::class,'edit_category'])->middleware(['auth','super-admin']);

#update

route::post('update_category/{id}',[SuperAdminController::class,'update_category'])->middleware(['auth','super-admin']);
// end of superadmin category

// start of superadmin Job Listings

Route::get('add_job',[SuperAdminController::class,'add_job'])->middleware(['auth','super-admin']);

#upload job
Route::post('upload_job',[SuperAdminController::class,'upload_job'])->middleware(['auth','super-admin']);

#view
Route::get('view_job', [SuperAdminController::class, 'view_job'])->middleware(['auth','super-admin']);

#delete
Route::get('update_job/{id}',[SuperAdminController::class,'update_job'])->middleware(['auth','super-admin']);

#update

route::post('edit_job/{id}',[SuperAdminController::class,'edit_job'])->middleware(['auth','super-admin']);

#search
Route::get('job_search',[SuperAdminController::class,'job_search'])->middleware(['auth','super-admin']);







// end of superadmin Job Listings



//admin auth login

Route::get('admin/dashboard',[AdminController::class,'index'])->middleware(['auth','admin']);


//employer auth login

Route::get('employer/dashboard',[EmployerController::class,'index'])->middleware(['auth','employer']);


//alumni auth login

Route::get('alumni/dashboard',[AlumniController::class,'index'])->middleware(['auth','alumni']);







