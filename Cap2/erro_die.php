<?php

function Abrir($file = null) {
    if (!$file) {
        die('Falta o parametro com o nome do arquivo');
    }
    if (!file_exists($file)) {
        die('Arquivo inexistente');
    }
    if (!$retorno = @file_get_contents($file)) {
        die('Impossivel ler o arquivo');
    }

    return $retorno;
}

$arquivo  = Abrir();
echo $arquivo;
