<?php
include_once("persistencia.php");
//1- Rebeceber o ID do livro
//http://localhost/livros/livros_excluir.php?id=6a99f5d204eac
if(! isset($_GET["id"])) {
    echo "Parametro ID não informado!";
    exit;
}

$id = $_GET["id"];
//2- Buscar os livros existentes no arquivo JSON
$livros = buscarDados("livros.json");
print_r($livros);
//3- Encontrar o índice do livro a ser excluir
$indice = 0;
foreach($livros as $l){
    if($l["id"] == $id) {
        break;
    }
    $indice++;
}
//4- Executar a função para excluir do array
//array_splice( , )
array_splice($livros, $indice, 1);

//5- Salvar os dados no arquivo JSON
salvarDados($livros, "livros.json");
//6- Redirecionar para o livros.php
header("location: livros.php");