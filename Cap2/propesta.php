<?php

class Aplicacao{
    static $Quantidade;
    
    function __construct($Nome) {
        self::$Quantidade++;
        $i = self::$Quantidade;
        
        echo "Nova aplicacao nr. $i: $Nome </br>";
    }
}

new Aplicacao('Gimp');
new Aplicacao('Dia');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');

echo "Quantidade de Aplicações: " . Aplicacao::$Quantidade . "</br>";