<?php

class Contato {

    var $Nome;
    var $Telefone;
    var $Email;

    function SetContato($Nome, $Telefone, $Email) {
        $this->Nome = $Nome;
        $this->Telefone = $Telefone;
        $this->Email = $Email;
    }

    function GetContato() {
        return "Nome: {$this->Nome}, Telefone: {$this->Telefone}, Email: {$this->Email}";
    }

}
