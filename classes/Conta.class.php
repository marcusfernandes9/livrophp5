<?php
abstract class Conta{
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada) {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;
        $this->Cancelada = $Cancelada;
    }
    
    function __destruct() {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} foi finalizada...</br>";
    }
    
    abstract function Transferir($Conta,$Valor);
            
    function Retirar($quantia){
        if($quantia > 0){
            $this->Saldo -= $quantia;
        }
    }
    
    function Depositar($quantia){
        if($quantia > 0){
            $this->Saldo += $quantia;
        }
    }
    
    function ObterSaldo(){
        return $this->Saldo;
    }
}