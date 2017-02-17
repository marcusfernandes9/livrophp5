<?php

function __autoload($classe){
    include_once "classes/{$classe}.class.php";
}

$bolo = new Produto(500, 'Bolo de Fubá', 4, 4.12);
echo 'Código: '.$bolo->Codigo."</br>";
echo 'Nome: '.$bolo->Descricao."</br>";