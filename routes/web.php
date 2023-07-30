<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustosController;

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

Route::get('/', [CustosController::class, 'index'])->name('inicio');
Route::post('/registro', [CustosController::class, 'store'])->name('registro');
Route::post('/editar', function()
{
    return view('editar');
})->name('atualização');
Route::get('/editar/{id}', [CustosController::class, 'update'])->name('editar');
Route::get('/deletar/{id}', [CustosController::class, 'update'])->name('deletar');
Route::get('/mostrar', [CustosController::class, 'show'])->name('mostrar');
Route::get('/login', function()
{
    return view('login');
})->name("login");
