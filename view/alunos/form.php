<?php

include_once(__DIR__ . "/../../controller/CursoController.php");

//Carregar a lista de cursos
$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
print_r($cursos);

//Incluir o cabeçalho de aplicação 
include_once(__DIR__ . "/../../view/alunos/include/header.php");

?>

<h3>Inserir Aluno</h3>

<form action="" method="POST"></form>

<div>
    <label for="Nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Informe o Nome">
</div>
<div>
    <label for="Idade">Idade:</label>
    <input type="number" id="idade" name="idade" placeholder="Informe sua idade">
</div>
<div>
    <label for="estrang">Estrangeiro:</label>
    <select name="estrang" id="estrang">
        <option value="">--- Selecione ---</option>
        <option value="S">Sim</option>
        <option value="N">Não</option>
    </select>
</div>
<div>
    <label for="curso">Cursos:</label>
    <select name="curso" id="curso">
        <option value="">--- Selecione ---</option>
        <!-- Opções geradas de forma dinâmica -->
         <option value="">Técnico em Desenvolvimento de Sistemas</option>
         <option value="">Tecnólogo em Desenvolvimento de Sistemas</option>
         <option value="">Ciência da Computação</option>
         <option value="">Sistemas de Informação</option>

    </select>
</div>