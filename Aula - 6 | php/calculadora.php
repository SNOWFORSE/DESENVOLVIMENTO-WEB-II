<!-- 1. Escreva um programa que simule o funcionamento de uma calculadora. A interface de possuir o
três campos, sendo:
Valor 1: deve ser informado um número
Valor 2: deve ser informado outro número
Operação: deve possibilitar ao usuário selecionar o as quatro operações: Soma, Subtração,
Multiplicação e Divisão.
Ao submeter o formulário, o programa deve mostrar o resultado da operação escolhida na mesma
interface onde foram informados os campos.
Também é necessário validar os campos (no backend), exibindo uma mensagem de erro caso algum
deles não tenha sido preenchido. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <h1>Calculadora Dos Bigode</h1>
    <form action="" method="POST">
        <input name="Valor1" placeholder="Infome um Número">
        <br><br>
        <input name="Valor2" placeholder="Informe um Número">
        <br><br>
        <select name="Calculadora">
                <option value="">Selecione uma Operação</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
        </select>
        <br><br>
        <button>Calcular</button>
    </form>


</body>
</html>

<?php

$valor1 = $_POST["Valor1"];
$valor2 = $_POST["Valor2"];
$operacao = $_POST["Calculadora"];

if ($operacao == "+"){
    echo $valor1 + $valor2;
}elseif ($operacao == "-"){
    echo $valor1 - $valor2;
}elseif ($operacao == "*"){
    echo $valor1 * $valor2;
}elseif ($operacao == "/"){
    if($valor2 != 0){
        echo $valor1 / $valor2;
    }else {
        echo "Erro: Divisão por zero!";
    }
}

?>