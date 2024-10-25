<?php

$pt = 0; $st = 1;

echo $pt." ".$st." ";
for ($x = 3; $x<=15;$x++){
    $ts = $pt + $st;
    echo $ts." ";
    $pt = $st;
    $st = $ts;
}