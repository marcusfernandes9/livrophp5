<?php

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';

$carlos = new Pessoa(10, "Carlos Silva", 170, 26, "01/01/1990", "Ensino Médio", 650.00);
$conta = new ContaPoupanca(6677, "PP.6547.12", "10/07/2017", $carlos, 9898, 500.00, false, "10/07/2017");

