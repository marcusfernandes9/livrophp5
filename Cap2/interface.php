<?php

interface IAluno{
    function getNome();
    function setNome($nome);
    function setResponsavel(Pessoa $responsavel);
}

class Aluno implements IAluno {
    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
}

$joaninha = new Aluno;
$joaninha->setNome("Joana");
echo $joaninha->getNome();
    
