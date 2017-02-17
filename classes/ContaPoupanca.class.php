<?php
final class ContaPoupanca extends Conta {
    var $Aniversario;
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada,$Aniversario) {
        //chamada do metodo construtor da classe pai
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada);
        $this->Aniversario = $Aniversario;
    }
    
    function Retirar($quantia) {
        if($this->Saldo >= $quantia){
            parent::Retirar($quantia);
        } else {
            echo "Operação não permitida";
            return false;
        }
        
        return true;
    }

    function Transferir($Conta, $Valor) {
        if($this->Retirar($Valor)){
            $Conta->Depositar($Valor);
        }
    }

}