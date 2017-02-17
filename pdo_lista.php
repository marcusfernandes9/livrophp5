<?php

try {
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=1234;host=localhost;port=5433');

    $result = $conn->query('select * from famosos');

    if ($result) {
        foreach ($result as $row) {
            echo $row['codigo'] . ' - ' . $row['nome'] . "</br>";
        }
        
        $conn = null;
    }
} catch (Exception $ex) {
    print 'Erro:' . $ex->getMessage() . "</br>";
    die();
}
