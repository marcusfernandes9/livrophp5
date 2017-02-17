<?php

$conn = pg_connect("host=localhost port=5433 dbname=livro user=postgres password=1234");

pg_query($conn,"INSERT INTO famosos (codigo,nome) values (1,'Érico Verissimo')");
pg_query($conn,"INSERT INTO famosos (codigo,nome) values (2,'John Lenom')");
pg_query($conn,"INSERT INTO famosos (codigo,nome) values (3,'Mahatma Gandhi')");
pg_query($conn,"INSERT INTO famosos (codigo,nome) values (4,'Ayrton Senna')");
pg_query($conn,"INSERT INTO famosos (codigo,nome) values (5,'Charlie Chaplin')");
pg_query($conn,"INSERT INTO famosos (codigo,nome) values (6,'Anita Garibaldi')");
pg_query($conn,"INSERT INTO famosos (codigo,nome) values (7,'Mário Quintana')");

pg_close($conn);
