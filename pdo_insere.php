<?php

try {
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=1234;host=localhost;port=5433');

    $conn->exec("INSERT INTO famosos (codigo,nome) values (1,'Érico Verissimo')");
    $conn->exec("INSERT INTO famosos (codigo,nome) values (2,'John Lenom')");
    $conn->exec("INSERT INTO famosos (codigo,nome) values (3,'Mahatma Gandhi')");
    $conn->exec("INSERT INTO famosos (codigo,nome) values (4,'Ayrton Senna')");
    $conn->exec("INSERT INTO famosos (codigo,nome) values (5,'Charlie Chaplin')");
    $conn->exec("INSERT INTO famosos (codigo,nome) values (6,'Anita Garibaldi')");
    $conn->exec("INSERT INTO famosos (codigo,nome) values (7,'Mário Quintana')");
    
    $conn = null;
} catch (Exception $ex) {
    print 'Erro: ' . $ex->getMessage() . "</br>";
    die();
}



