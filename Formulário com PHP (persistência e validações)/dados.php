<?php
$arquivoJson = "produtos.json";

//Função bolada para ler o Jayson
function lerProdutos() {
    global $arquivoJson;
    if (file_exists($arquivoJson)) {
        return json_decode(file_get_contents($arquivoJson), true) ?? [];
    }
    return [];
}

//Função para salvar no Jayson
function salvarProdutos($dados) {
    global $arquivoJson;
    file_put_contents($arquivoJson, json_encode($dados, JSON_PRETTY_PRINT));
}
