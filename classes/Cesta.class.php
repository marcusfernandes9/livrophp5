<?php

class Cesta {

    private $Itens;

    function AdicionaItem(Produto $Item) {
        $this->Itens[] = $Item;
    }

    function ExibeLista() {
        foreach ($this->Itens as $item) {
            $item->ImprimeEtiqueta();
        }
    }

    function CalculaTotal() {
        $total = 0;
        foreach ($this->Itens as $item) {
            $total += $item->Preco;
        }

        return 'R$ ' . $total;
    }

}
