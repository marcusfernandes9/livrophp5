<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa(10,"Carlos Silva",170,26,"01/01/1990","Ensino Médio",650.5);

echo "Manipulando Objeto carlos </br>";

echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} </br>";
$carlos->Formar("Técnico de Informática");
echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} </br>";

echo "{$carlos->Nome} possui {$carlos->Idade} anos. </br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos. </br>";

$conta_carlos = new Conta(6677,"CC.1234.56","10/07/2017",$carlos,9898,1500.61,false);

echo "</br>";
echo "Manipulando Conta de: {$conta_carlos->Titular->Nome}</br>";
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Depositar(600);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} </br>";

$conta_carlos->Retirar(2000);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} </br>";




