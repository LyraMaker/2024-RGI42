<?php

function delta(float $a, float $b, float $c){
    return $b**2 - (4*$a*$c);
}

function bhaskara(float $a, float $b, float $c){
    $x1 = -$b + sqrt(delta($a,$b,$c))/2*$a;
    $x2 = -$b - sqrt(delta($a,$b,$c))/2*$a;

    echo "O valor de x' é :".$x1."\n O valor de x'' é $x2";
}