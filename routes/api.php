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

           Route::get('dividir' , function (Request $request){
            $primeiraEntrada = $request->input('primeiraEntrada');
            $segundaEntrada = $request->input('segundaEntrada');
            $resultado = $primeiraEntrada/$segundaEntrada;
            return $resultado;
        });

        Route::get('multiplicar ' , function (Request $request){
            $primeiraEntrada = $request->input('primeiraEntrada');
            $segundaEntrada = $request->input('segundaEntrada');
            $resultado = $primeiraEntrada*$segundaEntrada;
            return $resultado;
            });

            Route::get('media' , function (Request $request){
                $Nota1 = $request->input('Nota1');
                $Nota2 = $request->input('Nota2');
                $Nota3 = $request->input('Nota3');
                $Nota4 = $request->input('Nota4');
                $Nota5 = $request->input('Nota5');
                $resultado = ($Nota1 + $Nota2 + $Nota3 + $Nota4 + $Nota5)/2;
                return $resultado;
                });

                Route::get('dividir2' , function (Request $request){
                    $segundaEntrada = $request->input('segundaEntrada');
                    $primeiraEntrada = $request->input('primeiraEntrada');
                    $resultado = $segundaEntrada/$primeiraEntrada;
                    return $resultado;
                });
