<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){
    $nome = $request->input('nome');
    return $nome;

});

Route::get('nome/idade' , function (Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');
return 'Meu nome é ' . $nome . ', tenho ' .$idade . ' anos de vida ';
});

Route::get('nome/nascimento/cidade' , function (Request $request){
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ', nasci no ano de ' .$nascimento . ' na cidade de '. $cidade;
    });

    Route::get('somar', function(Request $request){
        $primeiraEntrada = $request->input('primeiraEntrada');
        $segundaEntrada = $request->input('segundaEntrada');
        $resultado = $primeiraEntrada + $segundaEntrada;
        return $resultado;
        });

        Route::get('subtrair' , function(Request $request){
            $primeiraEntrada = $request->input('primeiraEntrada');
           $segundaEntrada = $request->input('segundaEntrada');
           $terceiraEntrada = $request->input('terceiraEntrada');
           $resultado = $primeiraEntrada - $segundaEntrada - $terceiraEntrada;
           return $resultado;
           });
           
