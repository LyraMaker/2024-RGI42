<?php

$nome = readline("Digite o seu nome: ");
$nascimento = readline("Digite o ano do seu nascimento: ");

$anoAtual = 2024;
$idade = $anoAtual - $nascimento;

echo "Hello World, $nome.\n"; // Para imprimir string na tela
echo "Você tem $idade anos de vida!";