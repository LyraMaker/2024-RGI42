<?php

echo quemMaior(-3, 0);

function quemMaiorTernario(float $n1, float $n2)
{
    return $n1 > $n2 ? $n1 : ($n1 < $n2 ? $n2 : "São iguais");
}

function quemMaior(float $n1, float $n2)
{
    if ($n1 > $n2) {
        return $n1;
    } else if ($n2 < $n2) {
        return $n2;
    } else {
        return "São iguais";
    }
}
