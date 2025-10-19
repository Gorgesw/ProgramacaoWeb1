<?php
define('DB_HOST', 'localhost'); 
define('DB_PORT',      '5432'); 
define('DB_USER',  'postgres'); 
define('DB_PASS',      '1234'); 
define('DB_NAME',     'local'); 

$connectionString = "host=".DB_HOST.
                     " port=".DB_PORT.
                     " dbname=".DB_NAME.
                     " user=".DB_USER.
                     " password=".DB_PASS;

$condb = pg_connect($connectionString);
if (!$condb) {
    echo "ERRO AO CONECTAR";
} else {
    echo "CONEXAO BEM SUCESSEDIDA";
}

