<?php

//prove interface utilizada para definição de criterios

class TCriteria extends TExpression {

    private $expressions;
    private $operators;
    private $properties;

    //adiciona uma expressão ao criterio
    public function add(TExpression $expression, $operator = self::AND_OPERATOR) {
        //na primeira vez não precisamos de um operador logico para contatenar
        if (empty($this->expressions)) {
            $operator = null;
        }

        //agrega o resultado da expressao a lista de expressoes
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    }

    //retorno expressao final
    public function dump() {
        $result = '';
        //contatena a lista de expressoes
        if (is_array($this->expressions)) {
            foreach ($this->expressions as $i => $expression) {
                $operator = $this->operators[$i];
                //contatena o valor comn a respectiva expressao
                $result .= $operator . $expression->dump() . ' ';
            }
        }
        $result = trim($result);
        return "({$result})";
    }
    
    //retorna o valor de uma propriedade
    public function getProperty($property) {
        return $this->properties[$property];
    }

}
