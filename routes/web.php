<?php

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\ArtistListController;
use App\Http\Controllers\EditArtistController;
use App\Http\Controllers\EditPollController;
use App\Http\Controllers\AddPollController;
use App\Http\Controllers\PollListController;
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
Route::post('/dashboard',[DashboardController::class,'index'])->name("dashboard.index")->middleware('changeEnvironment');;

//Admin Users Routes
Route::get('/adminusers',[AdminUsersController::class,'index'])->name("adminusers.index");
Route::post('/adminusers',[AdminUsersController::class,'index'])->name("adminusers.index")->middleware('changeEnvironment');

//User Management Routes
Route::get("/usermanagement",[UserManagementController::class,'index'])->name("usermanagement.index");
Route::post("/usermanagement",[UserManagementController::class,'index'])->name("usermanagement.index")->middleware('changeEnvironment');

//User Information Routes
Route::get("/userinformation",[UserInformationController::class,'index'])->name("userinformation.index");
Route::post("/userinformation",[UserInformationController::class,'index'])->name("userinformation.index")->middleware('changeEnvironment');

//Artist List Routes
Route::get("/artist_list",[ArtistListController::class,'index'])->name('artist_list.index');
Route::post("/artist_list",[ArtistListController::class,'index'])->name('artist_list.index')->middleware('changeEnvironment');

//Edit Artist Routes
Route::get('/edit_artists',[EditArtistController::class,'index'])->name('edit_artist.index');
Route::post('/edit_artists',[EditArtistController::class,'index'])->name('edit_artist.index')->middleware('changeEnvironment');

//Poll List Routes
Route::get("/polllist",[PollListController::class,'index'])->name("polllist.index");
Route::post("/polllist",[PollListController::class,'index'])->name("polllist.index")->middleware('changeEnvironment');

//Edit Poll Routes
Route::get('/edit_poll',[EditPollController::class,'index'])->name('edit_poll.index');
Route::post("/edit_poll",[PollListController::class,'index'])->name("edit_poll.index")->middleware('changeEnvironment');

//Add Poll Routes
Route::get('/add_poll',[AddPollController::class,'index'])->name('add_poll.index');
Route::post('/add_poll',[AddPollController::class,'index'])->name('add_poll.submit')->middleware('changeEnvironment');

