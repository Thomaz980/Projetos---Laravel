<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {

        // $dados = [
        //     'nome' => 'João Silva',
        //     'email' => 'joao@example.com',
            // Outros campos...
        // ];
        // $usuario = Usuario::create($dados);
    }

    public function store(Request $request): RedirectResponse
    {
        // Valide os dados recebidos antes de salvar no banco de dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
        ]);

        // Adicione os dados no banco
        $candidato = new Candidato();
        $candidato -> nome = $request -> nome;
        $candidato -> sobrenome = $request -> sobrenome;
        $candidato -> email = $request -> email;
        $candidato -> telefone = $request -> telefone;
        $candidato -> save();

        // Adicionar mensagem flash à sessão
        session()->flash('mensagem', 'Candidato cadastrado com sucesso!');

        // Redirecionar para a rota '/' com status 201 e a mensagem cadastro realizado
        return redirect('/')->with('status', 'Cadastro realizado com sucesso!');
    }

    public function show()
    {
        $candidatos = Candidato::all();
        return view('show', ['candidato' => $candidatos]);

//     $candidato = Candidato::find($id);
//     $candidato = Candidato::all();
//     return view('show', ['candidato' => $candidato]);
    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}
