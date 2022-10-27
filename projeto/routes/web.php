<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FuncionarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get("usuario/{id}",function($id){
    return "Voce está na pagina usuario o valor passado é {$id}";
});

Route::get("cliente",function(){
    $resultado = [
        "nome"=>"Astrobaldo Crisostomo",
        "endereco"=> "Rua das Mangabeiras 89",
        "CPF"=> "123.456.789-01"
    ];

    dd($resultado); // esse 

});

Route::get("teste", function(Request $requisicao){
    $resposta = $requisicao->ip();
    dd($resposta);
});

Route::get("funcionario",[App\Http\Controllers\FuncionarioController::class,"mostrarDados"]);

Route::get("funcionario1",[App\Http\Controllers\FuncionarioController::class,"infoFuncionario"]);

Route::get("funcionarioView",[FuncionarioController::class, "show"]);


