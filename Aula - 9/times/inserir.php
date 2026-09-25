<?php 
include_once("Connection.php");
$conn = Connection::getConnection();
//1 - Receber o nome e a cidade do time (GET)
$nome = "";
$cidade = "";
if(isset($_GET['nome'], $_GET['cidade']))
    $nome = $_GET['nome'];
    $cidade = $_GET['cidade'];

//1.1 - Validar os dados
if($nome == '' || $cidade == ''){
    echo "Informe [nome] e a [cidade] do time!";
    echo '<a href="listar.php">Voltar</a>';
    exit;
}

//2 - Inserir o time no banco de dados

$sql = "INSERT INTO times (nome, cidade) VALUES ('" . $nome ."', '" . $cidade ."')";
$conn = Connection::getConnection();
$stmt = $conn->prepare($sql);
$stmt->execute();

//3 - Redirecionar para a listagem
header("location: listar.php");