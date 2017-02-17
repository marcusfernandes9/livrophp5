<?php

include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

$pedro = new Estagiario;
$pedro->SetSalario(248);

echo 'salario:' . $pedro->GetSalario();

