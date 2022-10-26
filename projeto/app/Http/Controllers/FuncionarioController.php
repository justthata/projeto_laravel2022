<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function mostrarDados(){
        return "Estou na classe FuncionarioController";
    }

    public function infoFuncionario(){
    $infoFuncionario = [
        "nome"=>"Luan",
        "idade"=>20,
        "salario" =>50
    ];
        dd($infoFuncionario);
    }
}




