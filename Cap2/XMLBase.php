<?php

include_once 'classes/XMLBase.class.php';

class Cachorro extends XMLBase {

    function __construct($nome, $idade, $raca) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

}

$toto = new Cachorro('Cafu', 9, 'Doberman');
$vava = new Cachorro('pitty', 4, 'vira lata');

header('Content-type: text/xml');
echo "<?xml version='1.0'?>";
echo "<animal>";
echo $toto->toXml();
echo $vava->toXml();
echo "</animal>";

