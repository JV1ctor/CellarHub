<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\RegisterController;
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

Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register/save',[RegisterController::class,'register'])->name('register.save');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login/entrar',[LoginController::class,'entrar'])->name('login.entrar');
Route::get('/login/sair',[LoginController::class,'sair'])->name('login.sair');

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/vinhos',[VinhoController::class,'vinhos'])->name('admin.vinho');
Route::get('/vinhos/add',[VinhoController::class,'add'])->name('admin.vinho.add');
Route::post('/vinhos/save',[VinhoController::class,'save'])->name('admin.vinho.save');
Route::get('/vinhos/{id}/edit',[VinhoController::class,'edit'])->name('admin.vinho.edit');
Route::post('/vinhos/update/{id}',[VinhoController::class,'update'])->name('admin.vinho.update');
Route::delete('/vinhos/delete/{id}',[VinhoController::class,'delete'])->name('admin.vinho.delete');

Route::get('/poraos',[PoraoController::class,'poraos'])->name('admin.porao');
Route::get('/poraos/add',[PoraoController::class,'add'])->name('admin.porao.add');
Route::post('/poraos/save',[PoraoController::class,'save'])->name('admin.porao.save');
Route::get('/poraos/{id}/edit',[PoraoController::class,'edit'])->name('admin.porao.edit');
Route::post('/poraos/update/{id}',[PoraoController::class,'update'])->name('admin.porao.update');
Route::delete('/poraos/delete/{id}',[PoraoController::class,'delete'])->name('admin.porao.delete');

Route::get('/corredors',[CorredorController::class,'corredors'])->name('admin.corredor');
Route::get('/corredors/add',[CorredorController::class,'add'])->name('admin.corredor.add');
Route::post('/corredors/save',[CorredorController::class,'save'])->name('admin.corredor.save');
Route::get('/corredors/{id}/edit',[CorredorController::class,'edit'])->name('admin.corredor.edit');
Route::post('/corredors/update/{id}',[CorredorController::class,'update'])->name('admin.corredor.update');
Route::delete('/corredors/delete/{id}',[CorredorController::class,'delete'])->name('admin.corredor.delete');

Route::get('/armarios',[ArmarioController::class,'armarios'])->name('admin.armario');
Route::get('/armarios/add',[ArmarioController::class,'add'])->name('admin.armario.add');
Route::post('/armarios/save',[ArmarioController::class,'save'])->name('admin.armario.save');
Route::get('/armarios/{id}/edit',[ArmarioController::class,'edit'])->name('admin.armario.edit');
Route::post('/armarios/update/{id}',[ArmarioController::class,'update'])->name('admin.armario.update');
Route::delete('/armarios/delete/{id}',[ArmarioController::class,'delete'])->name('admin.armario.delete');

