<?php

use App\Http\Middleware\Alumni;
use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SuperAdminController;

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


// PERMISSIONS  AND ROLES OF SUPERADMIN 

#permissions

  Route::get('permission', [SuperAdminController::class, 'permission'])->middleware(['auth','super-admin']);

  Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);
      Route::resource('permissions', PermissionController::class);
  
  #Roles
  Route::get('role', [SuperAdminController::class, 'role'])->middleware(['auth','super-admin']);
  
  
  Route::resource('roles', RoleController::class);
  Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
  
  Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
  Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);
  
  #users
  Route::get('user', [SuperAdminController::class, 'user'])->middleware(['auth','super-admin']);
  
  
  Route::resource('users', UserController::class);
      Route::get('users/{userId}/delete', [UserController::class, 'destroy']);



// ADMIN 
//admin auth login

Route::get('admin/dashboard',[AdminController::class,'index'])->middleware(['auth','admin']);

//CATEGORIES & JOBS
  # view 

  Route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth','admin']);

  #add

Route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);

#delete

Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin']);

#edit

route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);

#update

route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);
// end of admin category

// start of admin Job Listings

Route::get('add_job',[AdminController::class,'add_job'])->middleware(['auth','admin']);

#upload job
Route::post('upload_job',[AdminController::class,'upload_job'])->middleware(['auth','admin']);

#view
Route::get('view_job', [AdminController::class, 'view_job'])->middleware(['auth','admin']);

#delete
Route::get('update_job/{id}',[AdminController::class,'update_job'])->middleware(['auth','admin']);

#update

route::post('edit_job/{id}',[AdminController::class,'edit_job'])->middleware(['auth','super-admin']);

#search
Route::get('job_search',[AdminController::class,'job_search'])->middleware(['auth','admin']);


//ROLES AND PERMISSIONS
#permissions
Route::get('permission', [SuperAdminController::class, 'permission'])->middleware(['auth','admin']);

Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);
    Route::resource('permissions', PermissionController::class);

#Roles
Route::get('role', [AdminController::class, 'role'])->middleware(['auth','admin']);


Route::resource('roles', RoleController::class);
Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

#users
Route::get('user', [AdminController::class, 'user'])->middleware(['auth','admin']);


Route::resource('users', UserController::class);
    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);




//employer auth login

Route::get('employer/dashboard',[EmployerController::class,'index'])->middleware(['auth','employer']);


//alumni auth login

Route::get('alumni/dashboard',[AlumniController::class,'index'])->middleware(['auth','alumni']);



// start of alumni category

  # view 

  Route::get('view_category', [AlumniController::class, 'view_category'])->middleware(['auth','alumni']);

  #add

Route::post('add_category',[AlumniController::class,'add_category'])->middleware(['auth','alumni']);

#delete

Route::get('delete_category/{id}',[AlumniController::class,'delete_category'])->middleware(['auth','alumni']);

#edit

route::get('edit_category/{id}',[AlumniController::class,'edit_category'])->middleware(['auth','alumni']);

#update

route::post('update_category/{id}',[AlumniController::class,'update_category'])->middleware(['auth','alumni']);
// end of alumni category



// portfolio
// Route::resource('projects', ProjectController::class);
// Route::get('projects', [AlumniController::class, 'projects'])->middleware(['auth','alumni']);

Route::middleware(['auth'])->group(function () {
  Route::resource('projects', ProjectController::class);
});


Route::middleware(['auth'])->group(function () {

  Route::get('portfolios', [AlumniController::class, 'portfolios'])->middleware(['auth','alumni']);


  // Route::get('portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
  Route::get('portfolios/{portfolio}', [PortfolioController::class, 'show'])->name('portfolios.show');

  Route::get('portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
  Route::post('portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
  Route::get('portfolios/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
  Route::put('portfolios/{portfolio}', [PortfolioController::class, 'update'])->name('portfolios.update');
  


});


Route::middleware(['auth', 'admin'])->group(function () {
  Route::post('portfolios/{portfolio}/approve', [PortfolioController::class, 'approve'])->name('portfolios.approve');
});