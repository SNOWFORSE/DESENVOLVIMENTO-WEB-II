<?php

include_once("Pessoa.php");

$pessoa = new Pessoa();
$pessoa->setNome('Gustavo ');
$pessoa->setSobrenome('Henrique');
$pessoa->nomePessoa();
echo $pessoa->nomePessoa();



