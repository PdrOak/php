<?php

$placaList = [
    'LMS-2312' => [
        'marca' => 'Subaru',
        'modelo' => 'Impreza hatch 2011'
    ],
    'LMS-1312' => [
        'marca' => 'Peugeot',
        'modelo' => '206 1.4 Presence'
    ],
    'LMS-1234' => [
        'marca' => 'Aston Martin',
        'modelo' => 'DB10'
    ]
];

foreach ($placaList as $placa => $carro){
    echo $placa . " é a placa do carro: " .  $carro['marca'] . " - " . $carro['modelo'] . PHP_EOL;
}