<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;

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


  // Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){
    Route::get('/chat' , [StaticController::class , 'chat'])->name('chat');
  // });



Route::get('/' , [StaticController::class , 'index'])->name('index');
Route::get('/dash' , [StaticController::class , 'dash'])->name('dash');
Route::get('/login' , [StaticController::class , 'login'])->name('login');
Route::get('/logout', [StaticController::class , 'index']);

Route::resource('salary_report', SalaryController::class );
Route::resource('employees' , EmployeeController::class);
Route::resource('users' , UserController::class);
Route::resource('departments' , DepartmentController::class);
Route::resource('attendances' , AttendanceController::class);
Route::resource('permissions' , PermissionController::class);
Route::resource('general_settings' , GeneralSettingController::class);

Route::get('/search', [SearchController::class,'search']);
Route::get('/searchemp', [SearchController::class,'searchemp']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
