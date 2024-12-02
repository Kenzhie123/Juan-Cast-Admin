<?php

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Login Routes
Route::get('/', [LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'login'])->name('login.login');


//Dashboard Routes
Route::get('/dashboard',[DashboardController::class,'index'])->name("dashboard.index");

//Admin Users Routes
Route::get('/adminusers',[AdminUsersController::class,'index'])->name("adminusers.index");

//User Management Routes
Route::get("/usermanagement",[UserManagementController::class,'index'])->name("usermanagement.index");
