<?php

$nome = readline("Digite o seu nome: ");
$sexo = readline("Digite o seu sexo: ");

echo $sexo == "Feminino" ? $nome."\n" : "";

if($sexo == "Feminino"){
    echo $nome."\n";
}

switch ($sexo){
    case "Feminino":
        echo $nome;
        break;
}