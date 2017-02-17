<?php

$conn = pg_connect("host=localhost port=5433 dbname=livro user=postgres password=1234");

$query = 'select * from famosos';

$result = pg_query($conn, $query);

if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        echo $row['codigo'] . ' - ' . $row['nome'] . "</br>";
    }
}

pg_close($conn);