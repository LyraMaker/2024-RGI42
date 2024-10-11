<?php
$nome = readline("Digite o seu nome: ");
$salario = readline("Digite o seu salário: ");

descontar($salario,5);

function descontar(float $salario, float $porcentagem){
    $taxa = ($salario * $porcentagem/100);
    $salario = $salario - $taxa;
    echo "O salário atual é $salario, teve um desconto de $taxa \n";
}