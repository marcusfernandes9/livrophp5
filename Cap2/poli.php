<?php

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';
include_once 'classes/ContaCorrente.class.php';

$carlos = new Pessoa(10, "Carlos Silva", 170, 26, "01/01/1990", "Ensino Médio", 650.00);


$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/2017", $carlos, 9898, 500.00, false, 200.00);
$contas[2] = new ContaPoupanca(6677, "PP.6547.12", "10/07/2017", $carlos, 9898, 500.00, false, "10/07/2017");

foreach ($contas as $key => $conta) {
    echo "Manipulando a conta $key de: {$conta->Titular->Nome}:  </br>";
    echo "O saldo atual da conta $key R\$ {$conta->ObterSaldo()} </br>";
    $conta->Depositar(200);
    echo "O saldo atual da conta $key R\$ {$conta->ObterSaldo()} </br>";
    $conta->Retirar(100);
    echo "O saldo atual da conta $key R\$ {$conta->ObterSaldo()} </br>";
}