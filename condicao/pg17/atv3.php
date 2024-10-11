<?php
echo verificarNumero(0);
function verificarNumero($n)
{
    if ($n > 0) {
        return "Positivo";
    }
    if ($n < 0) {
        return "Negativo";
    }
    return "Esse número é o zero";
}
