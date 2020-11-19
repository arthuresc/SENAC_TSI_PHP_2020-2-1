<?php

$dsn = 'mysql:dbname=db_login;host=localhost';
$dbuser = 'root';
$dbpass = '';

try{
    $objBanco = new PDO( $dsn, $dbuser, $dbpass);
} catch (PDOException $objErro) {
    echo 'SGDB indisponivel ' . $objErro;
}

