<?php

for ($x = 1; $x <= 100; $x++) {
    $conta = readline("Digite o número da sua conta: ");
    $saldo = readline("Digite o saldo atual: "); //500
    $dep = readline("Digite o valor do depósito: ");

    do {
        $saque = readline("Digite o valor do saque: ");

        if ($saque > $saldo) {
            echo "Você tem apenas R$" . round($saldo, 2) . ", não pode sacar!\n";
        }
    } while ($saque > $saldo);

    $saldoAt = $saldo + $dep - $saque;

    echo "A conta $conta \nTinha R$" . round($saldo, 2) . "\nAgora tem R$" . round($saldoAt, 2) . "\n";
}
