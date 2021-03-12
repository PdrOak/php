<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000 
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.456.789-66' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . " - Seu saldo é de " . $conta['saldo'] . PHP_EOL;
}

