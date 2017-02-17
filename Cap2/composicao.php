<?php

include_once 'classes/Fornecedor.class.php';
include_once 'classes/Contato.class.php';

$fornecedor = new Fornecedor();
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A.';

$fornecedor->SetContato('Marcus', '92 36367930', 'marcus@teste.com.br');

echo $fornecedor->RazaoSocial . "</br>";
echo "Informações de Contato </br>";
echo $fornecedor->GetContato() . "</br>";