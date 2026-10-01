<?php
require_once 'dados.php';

if (isset($_GET['id'])) {
    $idExcluir = $_GET['id'];
    $dados = lerProdutos();
    $novosDados = [];

    foreach ($dados as $p) {
        if ($p['id'] != $idExcluir) {
            $novosDados[] = $p;
        }
    }

    salvarProdutos($novosDados);
}

header("location: index.php");
exit;