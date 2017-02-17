<?php

function Abrir($file = null) {
    if (!$file) {
        trigger_error('Falta o parametro com o nome do arquivo', E_USER_NOTICE);
        return false;
    }
    if (!file_exists($file)) {
        trigger_error('Arquivo não existe', E_USER_NOTICE);
        return false;
    }
    if(!$retorno = @file_get_contents($file)){
        trigger_error('Impossivel ler arquivo', E_USER_WARNING);
    }
}

function manipula_erro($numero,$mensagem,$arquivo,$linha){
    $mensagem = "Arquivo {$arquivo}: linha {$linha}, #no. {$numero}: {$mensagem} </br>";
    
    $log = fopen('erros.log', 'a');
    fwrite($log, $mensagem);
    fclose($log);
    
    if($numero = E_USER_WARNING){
        echo $mensagem;
    } else if ($numero  = E_USER_ERROR){
        echo $mensagem;
        die;
    }
}

set_error_handler('manipula_erro');

$arquivo = Abrir('/tmp/arquivo.dat');
echo $arquivo;