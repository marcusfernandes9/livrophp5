<?php

include_once './app.ado/TExpression.class.php';
include_once './app.ado/TCriteria.class.php';
include_once './app.ado/TFilter.class.php';

$criteria = new TCriteria();
$criteria->add(new TFilter('idade', '<', 16));
$criteria->add(new TFilter('idade', '>', 60));
echo $criteria->dump();
echo "<br/>";

$criteria = new TCriteria();
$criteria->add(new TFilter('idade', 'IN', array(24, 25, 26)));
$criteria->add(new TFilter('idade', 'NOT IN', array(10)));
echo $criteria->dump();
echo "<br/>";

$criteria = new TCriteria();
$criteria->add(new TFilter('nome', 'like', '%pedro'), TExpression::OR_OPERATOR);
$criteria->add(new TFilter('nome', 'like', '%maria'), TExpression::OR_OPERATOR);
echo $criteria->dump();
echo "<br/>";

$criteria = new TCriteria();
$criteria->add(new TFilter('telefone', 'is not', null));
$criteria->add(new TFilter('sexo', '=', 'F'));
echo $criteria->dump();
echo "</br>";

$criteria = new TCriteria();
$criteria->add(new TFilter('uf', 'in', array('RS','SC','PR')));
$criteria->add(new TFilter('uf', 'not in', array('AC','PI')));
echo $criteria->dump();
echo "</br>";

$criteria1 = new TCriteria();
$criteria1->add(new TFilter('sexo', '=', 'F'));
$criteria1->add(new TFilter('idade', '>', '18'));

$criteria2 = new TCriteria();
$criteria2->add(new TFilter('sexo', '=', 'M'));
$criteria2->add(new TFilter('idade', '>', '16'));

$criteria = new TCriteria();
$criteria->add($criteria1,  TExpression::OR_OPERATOR);
$criteria->add($criteria2,  TExpression::OR_OPERATOR);
echo $criteria->dump();
echo "</br>";