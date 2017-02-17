<?php
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';

class ContaConrrenteEspecial extends ContaCorrente{
    function Depositar($quantia) {
        echo "sobreescrevendo metodo Depositar </br>";
        parent::Depositar($quantia);
    }
            
    function Transferir ($Conta,$Valor){
        echo "sobreescrevendo metodo Transferir </br>";
        parent::Transferir($Conta, $Valor);
    }
}
