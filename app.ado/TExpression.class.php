<?php

/* 
 * Classe TExpression
 * classe abstrata para gerenciar Expressoes
 */

abstract class TExpression {
    //operadores logicos
    const AND_OPERATOR = ' AND ';
    const OR_OPERATOR = ' OR ';
    
    abstract public function dump();
}