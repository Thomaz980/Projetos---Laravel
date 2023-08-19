<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requerimento;


class RequerimentoController extends Controller
{
    public function index()
    {
        return view('adm.teste');
    }

    public function show()
    {
        $requerimentos = Requerimento::all();
        // dd($requerimentos);
        return view('adm.requerimentos', ['requerimentos' => $requerimentos]);
    }

    public function atualizar()
    {

    }
}
