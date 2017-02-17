<?php

class aplicacao {

    static function Sobre() {
        $fd = fopen('readme.txt', 'r');
        while ($linha = fgets($fd, 200)) {
            echo $linha . "</br>";
        }
    }

}

echo "Informações sobre a aplicação: </br>";
echo "==============================</br>";
Aplicacao::Sobre();
