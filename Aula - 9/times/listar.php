<?php

include_once("Connection.php");

$conn = Connection::getConnection();


//teste da conexão com o banco 
//print_r($conn);

$sql = "SELECT * from times";
$stmt = $conn->prepare($sql);
$stmt->execute();

$dados = $stmt->fetchAll();
print_r($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Listagem de times</h2>
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Excluir</th>
            </tr>
            <?php foreach($dados as $time):?>
                <tr>
                    <td><?= $time["id"]?></td>
                    <td><?= $time["nome"]?></td>
                    <td><?= $time["cidade"]?></td>
                    <td>
                        <a href="excluir.php?id=<?= $time["id"] ?>"
                        onclick="return confirm('Confirma exclusão?');">Excluir</a>
                    </td>
                    
                </tr>
                    
            <?php endforeach; ?>
        </table>
        <a href="inserir.php?nome=Flamengo&cidade=Rio de Janeiro">Inserir</a>
</body>
</html>