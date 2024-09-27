<?php 
$media1 = $_POST["n1"];
$media2 = $_POST["n2"];

$mediaFinal = ($media1 + $media2)/2;

echo "Sua média é ".round($mediaFinal,2);

