<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuario/cadastro');

    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email"
        ]);
        dd($request->all());
    }
}
