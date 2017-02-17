<?php

class Cachorro {

    private $Nascimento;

    function __construct($Nome) {
        $this->Nome = $Nome;
    }

    function __set($propriedade, $valor) {
        if ($propriedade == 'Nascimento') {
            if (count(explode('/', $valor)) == 3) {
                echo "Dado '$valor', atribuido a '$propriedade' </br>";
                $this->$propriedade = $valor;
            } else {
              echo "Dado '$valor', não atribuido a '$propriedade' </br>";
            }
        } else{
            $this->$propriedade = $valor;
        }
    }
    
    function __toString() {
        return $this->Nome;
    }

}

$toto = new Cachorro('toto');
$vava = new Cachorro('vava');
echo $toto . "</br>";
echo $vava . "</br>";

