<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$nomeAlunos = [João, Maria, Pedro, Ana];

for ($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}

for ($i = 0; $i < count($nomeAlunos); $i++){
    echo $nomeAlunos[$i] . PHP_EOL;
}