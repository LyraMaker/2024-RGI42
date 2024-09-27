<?php
$matricula1 = readline("Matricula: ");
$nome1 = readline("Nome: ");
$salario1 = readline("Salário do funcionário: ");

$matricula2 = readline("Matricula: ");
$nome2 = readline("Nome: ");
$salario2 = readline("Salário do funcionário: ");

descontar($salario1,5);
acrescentar($salario2,9);

function descontar(float $salario, float $porcentagem){
    $taxa = ($salario * $porcentagem/100);
    $salario = $salario - $taxa;
    echo "O salário atual é $salario, teve um desconto de $taxa \n";
}

function acrescentar(float $salario, float $porcentagem){
    $taxa = ($salario * $porcentagem/100);
    $salario = $salario + $taxa;
    echo "O salário atual é $salario, teve um acrescimo de $taxa \n";
}