<?php

use App\Http\Controllers\ClienteController;
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
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/', [Controller::class, 'index'])->name('welcome');

