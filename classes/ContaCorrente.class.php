<?php

class ContaCorrente extends Conta {

    var $Limite;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada, $Limite) {
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada);
        $this->Limite = $Limite;
    }

    function Retirar($quantia) {
        $cpmf = 0.05;

        if (($this->Saldo + $this->Limite) >= $quantia) {
            //executa o metodo pai
            parent::Retirar($quantia);
            //debita cpmf
            parent::Retirar($quantia * $cpmf);
        } else {
            echo "Retirada não permitida </br>";
            return false;
        }
        return true;
    }

    final function Transferir($Conta, $Valor) {
        if ($this->Retirar($Valor)) {
            $Conta->Depositar($Valor);
        }
    }

}
