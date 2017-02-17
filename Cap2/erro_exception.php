<?php

function Abrir($file = null){
    if(!$file){
        throw new Exception('Falta o paramentro como o nome do arquivo');
    }
    if(!file_exists($file)){
        throw new Exception('Arquivo não existe');
    }
    if(!$retorno = @file_get_contents($file)){
        throw new Exception('Impossivel ler o arquivo');
    }
    return $retorno;
}

try{
    $arquivo = Abrir('tmp/arquivo.dat');
    echo $arquivo;
} catch (Exception $ex) {
    echo $ex->getFile() . ' : ' . $ex->getLine() . ' # ' . $ex->getMessage();
}