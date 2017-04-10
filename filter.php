<?php

include_once 'app.ado/TExpression.class.php';
include_once 'app.ado/TFilter.class.php';

//cria filtro por data (string)
$filter = new TFilter('data', '=', '2007-06-02');
echo $filter->dump();
echo "</br>";

$filter2 = new TFilter('salario', '>', 3000);
echo $filter2->dump();
echo "</br>";

$filter3 = new TFilter('sexo', 'IN', array('M','F'));
echo $filter3->dump();
echo "</br>";

$filter4 = new TFilter('contrato', 'IS NOT', NULL);
echo $filter4->dump();
echo "</br>";

$filter5 = new TFilter('ativo', '=', TRUE);
echo $filter5->dump();
echo "</br>";
