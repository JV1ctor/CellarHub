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

Route::get('/vinhos',[VinhoController::class,'vinhos'])->name('admin.vinho');
Route::get('/vinhos/add',[VinhoController::class,'add'])->name('admin.vinho');
Route::post('/vinhos/save',[VinhoController::class,'save'])->name('admin.vinho');
Route::get('/vinhos/{id}/edit',[VinhoController::class,'edit'])->name('admin.vinho');
Route::post('/vinhos/update/{id}',[VinhoController::class,'update'])->name('admin.vinho');
Route::delete('/vinhos/delete/{id}',[VinhoController::class,'delete'])->name('admin.vinho');

Route::get('/poraos',[PoraoController::class,'poraos'])->name('admin.porao');
Route::get('/poraos/add',[PoraoController::class,'add'])->name('admin.porao');
Route::post('/poraos/save',[PoraoController::class,'save'])->name('admin.porao');
Route::get('/poraos/{id}/edit',[PoraoController::class,'edit'])->name('admin.porao');
Route::post('/poraos/update/{id}',[PoraoController::class,'update'])->name('admin.porao');
Route::delete('/poraos/delete/{id}',[PoraoController::class,'delete'])->name('admin.porao');

Route::get('/corredors',[CorredorController::class,'corredors'])->name('admin.corredor');
Route::get('/corredors/add',[CorredorController::class,'add'])->name('admin.corredor');
Route::post('/corredors/save',[CorredorController::class,'save'])->name('admin.corredor');
Route::get('/corredors/{id}/edit',[CorredorController::class,'edit'])->name('admin.corredor');
Route::post('/corredors/update/{id}',[CorredorController::class,'update'])->name('admin.corredor');
Route::delete('/corredors/delete/{id}',[CorredorController::class,'delete'])->name('admin.corredor');

Route::get('/armarios',[ArmarioController::class,'armarios'])->name('admin.armario');
Route::get('/armarios/add',[ArmarioController::class,'add'])->name('admin.armario');
Route::post('/armarios/save',[ArmarioController::class,'save'])->name('admin.armario');
Route::get('/armarios/{id}/edit',[ArmarioController::class,'edit'])->name('admin.armario');
Route::post('/armarios/update/{id}',[ArmarioController::class,'update'])->name('admin.armario');
Route::delete('/armarios/delete/{id}',[ArmarioController::class,'delete'])->name('admin.armario');

