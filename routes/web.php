<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Dados;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Http\Controllers\CadastroController;
use Illuminate\Http\Response;
use App\Http\Controllers\CrudController;

Route::get('/', function()
{
    return view('welcome');
})->name('inicio');

Route::get('/', [CrudController::class, 'index']);
Route::post('/cadastro', [CrudController::class, 'store']);
Route::get('/mostrar', [CrudController::class, 'show']);
Route::get('/deletar/{id}', [CrudController::class, 'destroy']); //->middleware('auth');
Route::get('/editar/{id}', [CrudController::class, 'edit']); //->middleware('auth');
Route::put('/update/{id}', [CrudController::class, 'update']);
