<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos de vida ';
});

Route::get('nome/nascimento/cidade', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ', nasci em ' . $nascimento . ' na cidade de ' . $cidade;
});

Route::get('somar', function (Request $request) {
    $primeiraEntrada = $request->input('primeiraEntrada');
    $segundaEntrada = $request->input('segundaEntrada');
    $resultado = $primeiraEntrada + $segundaEntrada;
    return $resultado;
});

Route::get('subtrair', function (Request $request) {
    $primeiraEntrada = $request->input('primeiraEntrada');
    $segundaEntrada = $request->input('segundaEntrada');
    $terceiraEntrada = $request->input('terceiraEntrada');
    $resultado = $primeiraEntrada - $segundaEntrada - $terceiraEntrada;
    return $resultado;
});

Route::get('dividir', function (Request $request) {
    $primeiraEntrada = $request->input('primeiraEntrada');
    $segundaEntrada = $request->input('segundaEntrada');
    $resultado = $primeiraEntrada / $segundaEntrada;
    return $resultado;
});

Route::get('multiplicar ', function (Request $request) {
    $primeiraEntrada = $request->input('primeiraEntrada');
    $segundaEntrada = $request->input('segundaEntrada');
    $resultado = $primeiraEntrada * $segundaEntrada;
    return $resultado;
});

Route::get('media', function (Request $request) {
    $Nota1 = $request->input('Nota1');
    $Nota2 = $request->input('Nota2');
    $Nota3 = $request->input('Nota3');
    $Nota4 = $request->input('Nota4');
    $Nota5 = $request->input('Nota5');
    $resultado = ($Nota1 + $Nota2 + $Nota3 + $Nota4 + $Nota5) / 2;
    return $resultado;
});

Route::get('dividir2', function (Request $request) {
    $segundaEntrada = $request->input('segundaEntrada');
    $primeiraEntrada = $request->input('primeiraEntrada');
    $resultado = $segundaEntrada / $primeiraEntrada;
    return $resultado;
});

Route::get('dobro', function (Request $request) {
    $primeiraEntrada = $request->input('primeiraEntrada');
    $resultado = $primeiraEntrada * 2;
    return 'O dobro do ' . $primeiraEntrada . ' é igual a: ' . $resultado;
});

Route::get('arearetangulo', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return 'A área do retângulo é: ' . $resultado;
});

Route::get('valorproduto', function (Request $request) {
    $preço = $request->input('preço');
    $porcentagem = $request->input('porcentagem');
    $desconto = ($preço * $porcentagem) / 100;
    $resultado = $preço - $desconto;
    return $resultado;
});

Route::get('salario', function (Request $request) {
    $salarioAnterior = $request->input('salarioAnterior');
    $percentualAumento = $request->input('percentualAumento');
    $valorAumento = ($salarioAnterior * $percentualAumento) / 100;
    $salarioAtual = $salarioAnterior + $valorAumento;
    return 'Salario Anterior: ' .  $salarioAnterior .  ' , Percentual de Aumento: ' .  $percentualAumento .  ' , Salario Atual: ' .   $salarioAtual;
});

Route::get('recompensaValorCompra', function (Request $request) {
    $valorCompra = $request->input('valorCompra');
    $quantPontos = $valorCompra / 10;
    return $quantPontos;
});

Route::get('comissao', function (request $request) {
    $valorTotal = $request->input('valorTotal');
    $valorComissão = ($valorTotal * 5) / 100;
    return $valorComissão;
});

Route::get('dias', function (Request $request) {
    $numeroDias = $request->input('numeroDias');
    $horas = $numeroDias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    return 'Horas: ' . $horas . ' , Minutos: ' . $minutos . ', Segundos: ' . $segundos;
});

Route::get('totalCompra', function (Request $request) {
    $preço = $request->input('preco');
    $quantComprada = $request->input('quantComprada');
    $valorTotal = $preço * $quantComprada;
    return $valorTotal;
});

Route::get('mensagem', function (Request $request) {
    $numero = $request->input('numero');


    if ($numero > 10) {
        return "maior que 10";
    } else {
        return "menor que 10";
    }
});


Route::get('temperaturaatual', function (Request $request) {
    $temperatura = $request->input('temperatura');

    if ($temperatura > 30) {
        return "Está quente!";
    } else {
        return "Não está quente!";
    }
});

Route::get('positivo', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 0) {
        return 'positivo';
    }
    if ($numero < 0) {
        return 'negativo';
    } else {
        return 'Igual a 0';
    }
});

Route::get('maiornumero', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 > $numero2) {
        return "O " . $numero1 . " é maior que o " . $numero2;
    } else {
        return "O " . $numero2 . " é maior que o " . $numero1;
    }
});

Route::get('divisivel', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 3 == 0) {
        return 'O numero é divisivel por 3';
    } else {
        return 'O numero não é divisivel por 3';
    }
});

Route::get('maioridade' , function (Request $request){
$idade = $request->input('idade');

if($idade >=18){
    return "Maior de idade";
} else {
    return "Menor de idade";
}
});

Route::get('verificar/par' , function (Request $request){
$numero = $request->input('numero');

if($numero % 2 == 0){
    return "par";
} else {
    return "ímpar";
}
});

Route::get('divisivel2' , function (Request $request){
$numero = $request->input('numero');

if($numero % 9 == 0){
    return "Este número é divisível por 9";
} else {
    return "Este número não é divisível por 9";
}
});

Route::get('múltiplo' , function (Request $request){
$numero = $request->input('numero');

if($numero % 7 == 0 ) {
    return "Este número é múltiplo de 7";
} else {
    return "Este número não é múltiplo de 7";
}
});

Route::get('crianca' , function (Request $request){
$idade = $request->input('idade');

if($idade < 12){
    return "Você é uma criança";
} else {
    return "Você não é uma criança";
}
});

Route::get('positivoimpar' , function (Request $request){
$numero = $request->input('numero');

if($numero % 2 == 0){
    return "Positivo e Par";
} else {
    return "Positivo e Ímpar ";
}
});

Route::get('maiorque100' , function (Request $request){
$numero = $request->input('numero');

if($numero >  100){
    return "O " . $numero . " é maior que 100";
} if($numero < 100){
    return "O " . $numero . " é menor que 100";
} else {
    return "O " . $numero . " é igual a 100";
}
});

Route::get('divisivel3' , function (Request $request){
$numero = $request->input('numero');

if($numero % 6 == 0){
    return "Este número é divisível por 6";
} else {
    return "Este número não é divisível por 6";
}
});

Route::get('alice' , function (Request $request){
$nome = $request->input('nome');

if($nome =="Alice"){
    return "Olá, Alice";
} else {
    return "Olá, " . $nome . "Você não é Alice";
}
});


Route::get('dirigir' , function (Request $request){
$idade = $request ->input('idade');
$carteira = $request->input('carteira');

if($idade >=18){
    return "Você pode dirigir, pois é maior de idade!";
} else {
return "Você não pode dirigir, pois é menor de idade";
} if ($carteira ="Sim"){
return "Você possui caretira de motorista";
} else {
return "Você não possui carteira de motorista";
}
});

Route::get('menordeles' , function (Request $request){
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero2');

if($numero1 < $numero2){
    return "O " . $numero1 . " é menor que o " . $numero2;
} else {
    return "O " . $numero2 . " é menor que o " . $numero1;
}
});

Route::get('maioridade' , function (Request $request){
$nome = $request->input('nome');
$idade = $request->input('idade');

if($idade >= 18){
    return "Você é maior de idade, " . $nome;
} else {
    return "Você não é maior de idade, " . $nome;
}
if($nome =="Yan"){
    return "Olá, Yan";
} else {
    return "Olá";
} 
});

Route::get('divisao2' , function (Request $request){
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if($numero1 == 0){
        return "Não é possível efetuar a divisão pois o primeiro número é 0 ";
    } else if ($numero2 == 0){
        return "Não é possível efetuar a divisão pois o segundo número é 0 ";
    } else {
    return $numero1 / $numero2;
    }
});

Route::get('multiplica100' , function (Request $request){
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero2');

if($numero1 * $numero2 >100){
    return "Esta multiplicação é maior que 100";
} else {
    return "Esta multiplicação é menor que 100";
} 
});

Route::get('soma2' , function (Request $request){
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
     $soma = $numero1 + $numero2;
     
    if($soma % 2 == 0){
return $numero1 * $numero2;
    } else {
        return $numero1 / $numero2;
    }

});





    