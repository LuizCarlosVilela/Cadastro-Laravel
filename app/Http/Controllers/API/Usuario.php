<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Usuario as UsuarioMdel;

class Usuario extends Controller
{
    public function salvar(Request $request){

        if(UsuarioMdel::cadastrar($request))
        {
            return response("ok", 201);
        } else {
            return response("erro", 409);
        }

    }
}
