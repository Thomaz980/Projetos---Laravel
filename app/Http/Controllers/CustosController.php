<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Custo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class CustosController extends Controller
{
    public function index()
    {
        return redirect('mostrar');
    }

    public function store(Request $request)
    {
        if (!$request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'data' => 'required',
            'descricao' => 'required',
        ])){
            return redirect('mostrar')->with('error', 'Erro ao adicionar custo!');
        }

        $custo = new Custo();
        $custo->nome = $request->input('nome');
        $custo->tipo = $request->input('tipo');
        $custo->valor = $request->input('valor');
        $custo->data = $request->input('data');
        $custo->descricao = $request->input('descricao');
        $custo->save();
        return redirect('mostrar')->with('success', 'Custo adicionado com sucesso!');
    }

    public function show()
    {
        $custos = Custo::all();
        return view('welcome', ['custos' => $custos]);
    }

    public function edit($id)
    {
        $custo = Custo::findOrFail($id);
        return view('edit', ['custo' => $custo]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $custo = Custo::findOrFail($id);

        $custo->nome = $request->input('nome');
        $custo->tipo = $request->input('tipo');
        $custo->valor = $request->input('valor');
        $custo->data = $request->input('data');
        $custo->descricao = $request->input('descricao');
        $custo->save();
        return redirect('mostrar')->with('success', 'Custo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Custo::findOrFail($id)->delete();
        return redirect('mostrar')->with('success', 'Custo deletado com sucesso!');
    }
}

// $request->validate([
        //     'nome' => 'required',
        //     'valor' => 'required',
        //     'data' => 'required',
        //     'descricao' => 'required',
        // ]);

        // $custo = new Custo([
        //     'nome' => $request->get('nome'),
        //     'valor' => $request->get('valor'),
        //     'data' => $request->get('data'),
        //     'descricao' => $request->get('descricao'),
        // ]);
        // $custo->save();
        // return redirect('/')->with('success', 'Custo adicionado com sucesso!');





        // $candidatos = Candidato::all();
        // return view('show', ['candidato' => $candidatos]);
