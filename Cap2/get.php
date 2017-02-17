<?php

include_once 'classes/Produto.class.php';

$produto = new Produto(1, 'Pen drive 16gb', 2, 30.00);
echo $produto->Preco;

