<?php

define('DB', 'mysql:dbname=nps;host=localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//CONNECT

// try{
//     $objBanco = new PDO( DB, DB_USER, DB_PASS);
// }catch (PDOException $objErro){
//     echo 'Indisponivel ' . $objErro;
// }

$db = new PDO(DB, DB_USER, DB_PASS);
$dbStart = $db->query("CREATE TABLE IF NOT EXISTS notas_nps ( nota INT NOT NULL, textA VARCHAR(255) NULL");

$declaracao = $db->prepare('INSERT INTO nps')


if( $db->query("INSERT INTO notas_nps (nota, textA) VALUES ('{$_POST['nota']}', '{$_POST['textT']}')")){
    echo "Sucesso";
}else{
    echo 'Erro';
};

var_dump($_POST);

// $nota = $POST['nota'];
// $text = $POST['text'];

