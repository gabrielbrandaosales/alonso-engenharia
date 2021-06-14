<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PropostaController;
use App\Http\Controllers\Controller;
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
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');

Route::put('/proposta/{id}', [PropostaController::class, 'update'])->name('proposta.update');
Route::get('/proposta/edit/{id}', [PropostaController::class, 'edit'])->name('proposta.edit');
Route::get('/proposta/create', [PropostaController::class, 'create'])->name('proposta.create');
Route::get('/proposta', [PropostaController::class, 'index'])->name('proposta.index');
Route::post('/proposta', [PropostaController::class, 'store'])->name('proposta.store');
Route::get('/proposta/{id}', [PropostaController::class, 'show'])->name('proposta.show');

Route::get('/', [Controller::class, 'index'])->name('welcome');

