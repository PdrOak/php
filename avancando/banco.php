<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

function depositar (array $conta, float $valorADepositar): array {
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    }else {
        exibeMensagem ("Depositos precisam ser positivos");
    }
    return $conta;
}

function sacar (array $conta, float $valoASacar): array {
    if($valoASacar > $conta['saldo']) {
        exibeMensagem("Você não possue saldo suficiente!");
    }else {
        $conta['saldo'] -= $valoASacar;
    }

    return $conta;
}


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    22
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    300
);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}