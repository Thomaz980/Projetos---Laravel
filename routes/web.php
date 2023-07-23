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



// Route::post('/cadastro', [CadastroController::class, 'store']);
// Route::get('/cadastro', [CadastroController::class, 'index']);

// Route::post('/cadastro', function (Request $informacoes){
//     $candidato = new Candidato();
//     $candidato -> nome = $informacoes -> nome;
//     $candidato -> sobrenome = $informacoes -> sobrenome;
//     $candidato -> email = $informacoes -> email;
//     $candidato -> telefone = $informacoes -> telefone;
//     $candidato -> save();git 
//     return redirect('/', 201);

//     Candidato::create([
//         'nome' => $informacoes -> nome,
//         'sobrenome' => $informacoes -> sobrenome,
//         'email' => $informacoes -> email,
//         'telefone' => $informacoes-> telefone
//     ]);
//     return response(['message' => 'Candidato Cadastrado com Sucesso!'], Response::HTTP_CREATED);
// });

// Route::get('/mostrar', function()
// {
//     $candidato = Candidato::find($id);
//     $candidato = Candidato::all();
//     return view('show', ['candidato' => $candidato]);
//     findOrFail() retorna um erro se usuário não for encontrado
//     echo $candidato->nome;
//     echo $candidato->email;
//     dd($candidato -> nome);
// });

// Route::get('/teste', function()
// {
//     return Inertia::render('Teste');
// });
//
