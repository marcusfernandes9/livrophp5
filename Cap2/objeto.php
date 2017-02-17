<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa();
$carlos->Codigo = 10;
$carlos->Altura = 170;
$carlos->Escolaridade = "Ensino Médio";
$carlos->Idade = 26;
$carlos->Nome = "Carlos Silva";
$carlos->Salario = 650.5;

echo "Manipulando Objeto carlos </br>";

echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} </br>";
$carlos->Formar("Técnico de Informática");
echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} </br>";

echo "{$carlos->Nome} possui {$carlos->Idade} anos. </br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos. </br>";

$conta_carlos = new Conta();
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/2017";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9898;
$conta_carlos->Saldo = 1500.61;
$conta_carlos->Cancelada = false;

echo "</br>";
echo "Manipulando Conta de: {$conta_carlos->Titular->Nome}</br>";
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Depositar(600);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Retirar(2000);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} </br>";




