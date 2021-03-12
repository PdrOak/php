<?php

$peso = 2;
$altura = 1.80;

$imc = $peso / $altura ** 2;

echo "$imc" . PHP_EOL;

if($imc <= 16){
    echo "IMC abaixo do normal" . PHP_EOL;
}elseif($imc >= 30){
    echo "IMC acima do normal" . PHP_EOL;
}else{
    echo "IMC normal" . PHP_EOL;
}

