<?php

function Abrir($file = null) {
    if (!$file) {
        throw new ParameterException('Falta o paramentro com o nome de arquivo');
    }
    if (!file_exists($file)) {
        throw new FileNotFoundException('Arquivo não existente');
    }
    if (!$retorno = @file_get_contents($file)) {
        throw new FilePermissonException('Impossivel ler o arquivo');
    }

    return $retorno;
}

class ParameterException extends Exception {
    
}

class FileNotFoundException extends Exception {
    
}

class FilePermissonException extends Exception {
    
}

try {
    $arquivo = Abrir('123.txt');
    echo $arquivo;
} catch (ParameterException $ex) {
    
} catch (FileNotFoundException $ex) {
    echo '<pre>';
    var_dump($ex->getTrace());
    echo 'finalizando aplicacao...</br>';
    die;
} catch (FilePermissonException $ex) {
    echo $ex->getFile() . ' : ' . $ex->getLine() . ' # ' . $ex->getMessage();
}