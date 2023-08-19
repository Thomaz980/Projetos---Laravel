<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Aluno;
use App\Models\Professor;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function registro()
    {
        return view('registro');
    }

    public function logar(Request $request)
    {
        // Verificar se os dados enviados estão no banco
        $email = $request->input('email');
        $senha = $request->input('password');
        $tipo = $request->input('type');

        if ($tipo == 'administrador')
        {
            $admin = Admin::where('email', $email)->where('senha', $senha)->first();
            if ($admin)
            {
                return view('adm.admin', ['admin' => $admin]);
            }
            else
            {
                return redirect()->route('login');
            }
        }
        else if ($tipo == 'aluno')
        {
            $aluno = Aluno::where('email', $email)->where('senha', $senha)->first();
            if ($aluno)
            {
                return redirect()->route('aluno', ['aluno' => $aluno]);
            }
            else
            {
                return redirect()->route('login');
            }
        }
        else if ($tipo == 'professor')
        {
            $professor = Professor::where('email', $email)->where('senha', $senha)->first();
            if ($professor)
            {
                return redirect()->route('professor', ['professor' => $professor]);
            }
            else
            {
                return redirect()->route('login');
            }
        }
    }

    public function sessao(Request $request)
    {
        $value = $request->session()->all();
        dd($value);
    }
}
