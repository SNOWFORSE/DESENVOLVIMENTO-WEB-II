<?php
require_once 'dados.php';

//Professor, esse trabalho fiz individual, usei varias partes dos slides para fazer, 
//mas não deixei de usar a internet para auxilio nos erros que foram acontecendo.
//Gustavo Herique Apolinario


$dados = lerProdutos();
$erro = "";

//aqui comeca o cadastro bolado 
if (isset($_POST['cadastrar'])) {
    $nome = trim($_POST['nome']);
    $preco = trim($_POST['preco']);
    $quantidade = trim($_POST['quantidade']);
    $categoria = trim($_POST['categoria']);

    //aqui valida no back-end
    if ($nome == "" || $preco == "" || $quantidade == "" || $categoria == "") {
        $erro = "Preencha todos os campos!";
    } else {
        $novoProduto = [
            "id" => time(),
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade,
            "categoria" => $categoria
        ];

        $dados[] = $novoProduto;
        salvarProdutos($dados);
        header("location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body style="margin: 30px;">

    <h2>Cadastro de Produtos</h2>

    <?php if ($erro != ""): ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Preço:</label><br>
        <input type="text" name="preco"><br><br>

        <label>Quantidade:</label><br>
        <input type="text" name="quantidade"><br><br>

        <label>Categoria:</label><br>
        <select name="categoria">
            <option value="">Selecione...</option>
            <option value="Eletrônicos">Eletrônicos</option>
            <option value="Roupas">Roupas</option>
            <option value="Alimentos">Alimentos</option>
        </select><br><br>

        <button type="submit" name="cadastrar">Salvar</button>
    </form>

    <hr>

    <h2>Lista de Produtos</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Ação</th>
        </tr>
        <?php if (empty($dados)): ?>
            <tr><td colspan="6">Nenhum produto cadastrado.</td></tr>
        <?php else: ?>
            <?php foreach ($dados as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['nome'] ?></td>
                    <td><?= $p['preco'] ?></td>
                    <td><?= $p['quantidade'] ?></td>
                    <td><?= $p['categoria'] ?></td>
                    <td>
                        <a href="excluir.php?id=<?= $p['id'] ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</body>
</html>