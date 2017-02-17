<?php

class Cachorro {

    function __construct($coleira, $nome, $idade, $raca) {
        $this->coleira = $coleira;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    function __clone() {
        $this->coleira = $this->coleira + 1;
        $this->nome .= " Jr";
        $this->idade = 0;
    }

}

$toto = new Cachorro(1, 'Cafu', 9, 'Fila Brasileiro');
$vava = clone $toto;

echo "coleira: " . $toto->coleira . "</br>";
echo "nome: " . $toto->nome . "</br>";
echo "idade: " . $toto->idade . "</br>";
echo "raca: " . $toto->raca . "</br></br>";

echo "coleira: " . $vava->coleira . "</br>";
echo "nome: " . $vava->nome . "</br>";
echo "idade: " . $vava->idade . "</br>";
echo "raca: " . $vava->raca . "</br></br>";

