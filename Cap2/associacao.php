<?php

include_once 'classes/Fornecedor.class.php';
include_once 'classes/Produto.class.php';

$fornecedor = new Fornecedor();
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom gosto Alimentos';
$fornecedor->Endereco = 'Rua Ipiranga';
$fornecedor->Cidade = 'Manaus';

$produto = new Produto();
$produto->Codigo = 462;
$produto->Descricao = 'Cerveja em lata';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

echo 'Código: ' . $produto->Codigo ."</br>";
echo 'Descrição: ' . $produto->Descricao ."</br>";
echo 'Código: ' . $produto->Fornecedor->Codigo ."</br>";
echo 'Razão Social: ' . $produto->Fornecedor->RazaoSocial ."</br>";