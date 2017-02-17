<?php

class Produto {
    var $Codigo;
    var $Descricao;
    var $Quantidade;
    private $Preco;
    const MARGEM = 10;
    
    function __construct($Codigo,$Descricao,$Quantidade,$Preco) {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Quantidade = $Quantidade;
        $this->Preco = $Preco;
    }
            
    function __call($metodo,$paramentros) {
        echo "Você executou  o metodo: {$metodo} </br>";
        foreach ($paramentros as $key => $parametro){
            echo "\tparametro $key: $parametro </br>";
        }
    }
}