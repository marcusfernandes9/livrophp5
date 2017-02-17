<?php

$dados_william['nome'] = 'William Scatola';
$dados_william['idade'] = 22;
$dados_william['profissao'] = 'Controle de Estoque';

$dados_daline['nome'] = 'Dalina Silva';
$dados_daline['idade'] = 22;
$dados_daline['profissao'] = 'Almoxarifado';

foreach ($dados_william as $chave => $valor) {
    $wiliam->$chave = $valor;
}

foreach ($dados_daline as $chave => $valor) {
    $daline->$chave = $valor;
}

echo "{$wiliam->nome} é {$wiliam->profissao} </br>";
echo "{$daline->nome} é {$daline->profissao} </br>";