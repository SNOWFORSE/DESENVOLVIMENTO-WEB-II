<?php

include_once("calculadora.php");

$calculadora = new calculadora();
$calculadora->setNum1(10);
$calculadora->setNum2(23);
echo $calculadora->getNum1() . " + " . 
     $calculadora->getNum2() . " = " .  
     $calculadora->somar();