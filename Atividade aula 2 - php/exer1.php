<?php

    $l1 = array("Nome", "Endereço", "Cidade", "UF");
    $l2 = array("Manuel de Medeiros", "Rua das Acácias", "Foz do Iguaçu", "PR");
    $l3 = array("Juliana de Amaral", "Rua dos Pinheiros", "Florianópolis", "SC");
    $l4 = array("Rodrigo Baidek", "Rua Dom Pedro I", "Petrópolis", "RJ");
    $l5 = array("Fabíola da Silva", "Rua Chile", "Guarulhos", "SP");

    $pessoas = array($l2, $l3, $l4, $l5);


    echo '<table style="border-collapse: collapse; font-size: 11px;" border="1">';

    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Endereço</th>";
    echo "<th>Cidade</th>";
    echo "<th>UF</th>";
    echo "</tr>";

    foreach($pessoas as $elemento){
        echo "<tr>";
        foreach($elemento as $valores){
            echo "<td style='background-color: #c0c0c0; padding: 2px 4px;'>{$valores}</td>";
        }
        echo "</tr>";
    }

    echo "</table>"


?>
