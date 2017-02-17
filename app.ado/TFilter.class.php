<?php

/*
 * prove uma interface para definição de filtros de seleção
 */

class TFilter extends TExpression {

    private $variable;
    private $operator;
    private $value;

    public function __construct($variable, $operator, $value) {
        $this->variable = $variable;
        $this->operator = $operator;
        $this->value = $this->transform($value);
    }

    private function transform($value) {
        if (is_array($value)) {
            foreach ($value as $x) {
                if (is_integer($x)) {
                    $foo[] = $x;
                } else if (is_string($x)) {
                    $foo[] = "'" . $x . "'";
                }
            }
            //converte array em uma string separada por ","
            $result = '(' . implode(',', $foo) . ')';
        } else if (is_string($value)) {
            $result = "'" . $value . "'";
        } else if(is_null($value)){
            $result = 'NULL';
        } else if(is_bool($value)){
            $result = $value ? 'TRUE' : 'FALSE';
        } else {
            $result = $value;
        }
        
        return $result;
    }
    
    //retorna filtro em forma de expressao
    public function dump() {
        return "{$this->variable} {$this->operator} {$this->value}";
    }

}
