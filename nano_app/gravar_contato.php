<?php

require_once './db.php';

//Como evitar SQL Injection

$objStmt = $objBanco->prepare('INSERT INTO contatos ( nome, telefone ) VALUES ( :name, :phone ) ');

$objStmt->bindParam(':name', $_POST['nome']);
$objStmt->bindParam(':phone', $_POST['telefone']);

// $objStmt->execute( array( $_POST['nome'], $_POST['telefone'] )); é o mesmo que o if

if ( $objStmt->execute() ){
    $msg = 'Obrigado por se Cadastrar';
} else {
    $msg = 'Deu erro no cadastro';
}

include 'grava_contato_tpl.php';