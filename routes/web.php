<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArmarioController;
use App\Http\Controllers\Admin\CorredorController;
use App\Http\Controllers\Admin\PoraoController;
use App\Http\Controllers\Admin\VinhoController;

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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'login'])->name('login');


Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/vinhos',[VinhoController::class,'vinhos'])->name('admin.vinhos');
Route::get('/addvinho',[VinhoController::class,'addVinho'])->name('admin.add.vinho');

Route::get('/porao/{id}',[PoraoController::class,'porao'])->name('admin.porao');
Route::get('/corredor/{id}',[CorredorController::class,'corredor'])->name('admin.corredor');
Route::get('/armario/{id}',[ArmarioController::class,'armario'])->name('admin.armario');
