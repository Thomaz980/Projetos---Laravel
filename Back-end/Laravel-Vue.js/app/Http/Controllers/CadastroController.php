<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;
use Illuminate\Http\RedirectResponse;


class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retorne as variaveis $nome, $sobrenome enviadas para a função store

        $candidatos = Candidato::all();
        return view('cadastro', ['candidatos' => $candidatos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Armazene um recurso recém -criado em armazenamento.
     */
    public function store(Request $request) //:RedirectResponse
    {
        $name =$request->input('nome');
        $sobrenome =$request->input('sobrenome');
        $email =$request->input('email');
        $telefone =$request->input('telefone');
        // dd($request->all());
        // return redirect('/candidatos');
    }

    /**
     * Exibir o recurso especificado.
     */
    public function show(string $id)
    {
        // Pegaria o id passado pelo get ou post e usaria a fiunção find()
        // para retornar o candidato com o id correspondente
        Candidato::find();
        // Retorna uma view que mostra os dados do candidato selecionado (com seus
        // respectivos campos)
        return View("show", compact(['dadosCandidato']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}



// Receber dados do formulário pelo post e atribuir a uma variável
// $dados = $_POST;
