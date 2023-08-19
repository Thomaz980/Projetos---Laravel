<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequerimentoController;
use App\Models\Requerimento;


// Projeto Vue.js

Route::get('/vue', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rotas Gerais

Route::get('/', function(){
    return view('welcome');
})->name('inicio');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logar'])->name('logar');
Route::get('/login/registro', [LoginController::class, 'registro'])->name('registro');

Route::get('/admin', function(){
    return view('adm.admin');
})->name('admin');

Route::get('/aluno', function(){
    return view('user.user');
})->name('aluno');

Route::get('/professor', function(){
    return view('professor.index');
})->name('professor');

// Painel Administrativo

Route::get('adm/alunos', function(){
    return view('adm.alunos');
})->name('admAlunos');

Route::get('/adm/requerimentos', [RequerimentoController::class, 'show'])->name('admRequerimentos');

Route::get('/adm/turmas', function(){
    return view('adm.turmas');
})->name('admTurmas');

Route::get('/adm/disciplinas', function(){
    return view('adm.disciplinas');
})->name('admDisciplinas');

Route::get('/adm/cursos', function(){
    return view('adm.cursos');
})->name('admCursos');

// Controller Requerimento

Route::get('/requerimentos', [RequerimentoController::class, 'show']);

Route::get('/editar/{id}', function($id){
    $requerimento = Requerimento::findOrFail('id');
    dd($requerimento);
    // Mandar a atualização do status
});

// Testando Sessão do Usuário

Route::get('/sessao', [LoginController::class, 'sessao']);


