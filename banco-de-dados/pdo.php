<?php

require_once './config.php'; //require da erro fatal e não roda se ele não encontrar o arquivo e include não da um warning

$objBanco = new PDO( DSN, DBUSER, DBPASS);

$consulta = $objBanco->query('SELECT id, nome, telefone FROM contatos', PDO::FETCH_ASSOC);

// var_dump( $objBanco->errorInfo() ); //é do objBanco pq a classe PDO está instanciada nessa variavel

$apagar = $objBanco->query('DELETE FROM contatos WHERE id = 10');


if ( $objBanco->query( "INSERT INTO contatos (nome, telefone) VALUES ('{$_POST['nome']}', '{$_POST['tel']}')") ) {
    echo "Contato inserido com sucesso";
}

foreach ($consulta as $registro) {
    echo "ID: {$registro['id']} Nome: {$registro['nome']} Telefone: {$registro['telefone']} <br>";
}