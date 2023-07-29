<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index ()
    {
        return redirect()->action([Controller::class, 'store']); // Gerar redirecionamentos para ações do controlador . Para fazer isso, passe o controlador e o nome da ação para o action método
    }


    public function store (Request $request)
    {
        $url = $request->url();
        $strigDeConsulta = $request->fullUrl();
        $method = $request->method();
        $input = $request->all();

        $input = $request->input('name'); // método recupere valores de toda a carga útil da solicitação (incluindo a string de consulta)
        $inputAll = $request->query('name'); // método recuperará apenas valores da string de consulta
    }

    public function show ()
    {
        return response()->json([
            'name' => 'Maria',
            'state' => 'SP',
        ]);
    }


}
