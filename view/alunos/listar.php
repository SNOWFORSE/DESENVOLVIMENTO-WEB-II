<?php

//testar a conexão
//include_once(__DIR__ . "/../../util/Connection.php");
//$conn = Connection::getConnection();
//print_r($conn);

include_once(__DIR__ . "/../../controller/AlunoController.php");
//Carregar a lista de alunos
$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();
//print_r($alunos);

include_once(__DIR__ . "/include/header.php");

?>

<h3>Listagem de Alunos</h3>

<table border="1px " text-align: center>
   <!-- Cabeçalho -->
   <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Idade</th>
      <th>Estrangeiro</th>
      <th>Curso</th>
   </tr>

   <!-- Dados -->
   <a href="inserir.php">Inserir</a>
   <?php foreach($alunos as $a):?>
      <tr>
         <td style="text-align: center;"><?= $a->getId() ?></td>
         <td style="text-align: center;"><?= $a->getNome() ?></td>
         <td style="text-align: center;"><?= $a->getIdade() ?></td>
         <td style="text-align: center;"><?= $a->getEstrangeiroDesc() ?></td>
         <td style="text-align: center;"><?= $a->getCurso()//Executar o metodo to String ?></td>
      </tr>
   <?php endforeach;?>
</table>

<?php
include_once(__DIR__ . "/include/footer.php");
?>