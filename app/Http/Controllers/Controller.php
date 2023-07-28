<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store (Request $request)
    {
        $url = $request->url();
        $strigDeConsulta = $request->fullUrl();
        $method = $request->method();
        $input = $request->all();
    }
}
