<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    protected $connection = "sqlite";
    protected $table = "usuario";

    public static function listar(int $limite)
    {
        $sql = self::select([
            "id",
            "nome",
            "email",
            "data_cadastro"
        ])
        ->limit($limite);

        dd($sql->toSql());
    }

    public static function cadastrar(Request $request)
    {
        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "data_cadastro" => DB::raw('NOW()')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
