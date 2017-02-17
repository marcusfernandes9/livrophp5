<?php

class Cachorro {

    function __construct($nome, $idade, $raca) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    function toXml() {
        return 
<<<XML
<cachorro>
    <nome> {$this->nome} </nome>
    <idade> {$this->idade} </idade>
    <raca> {$this->raca} </raca>
</cachorro>
XML;
    }

}

$toto = new Cachorro('Cafu', 9, 'Doberman');
$vava = new Cachorro('pitty', 4, 'vira lata');
/*
header('Content-type: text/xml');
echo "<?xml version='1.0'?>";
echo "<animal>";
echo $toto->toXml();
echo $vava->toXml();
echo "</animal>";*/
echo "C:/xampp/htdocs/Food/usuarios/upload/" . "</br>";
echo str_replace("/","\\","C:/xampp/htdocs/Food/usuarios/upload/");
