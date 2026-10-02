<?php

//testar a conexão
//include_once(__DIR__ . "/../../util/Connection.php");
//$conn = Connection::getConnection();
//print_r($conn);

include_once(__DIR__ . "/../../controller/AlunoController.php");
//Carregar a lista de alunos
$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();
print_r($alunos);

include_once(__DIR__ . "/include/header.php");

?>

<h3>Listagem de Alunos</h3>

<table border="1px">
   <!-- Cabeçalho -->
   <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Idade</th>
      <th>Estrangeiro</th>
      <th>Curso</th>
   </tr>

   <!-- Dados -->
</table>

<?php
include_once(__DIR__ . "/include/footer.php");
?>