<?php

require_once './config.php'; //require da erro fatal e não roda se ele não encontrar o arquivo e include não da um warning

try{
    $objBanco = new PDO( DSN, DB_USER, DB_PASS);
} catch (PDOException $objErro) {
    echo 'SGDB indisponivel ' . $objErro;
} 