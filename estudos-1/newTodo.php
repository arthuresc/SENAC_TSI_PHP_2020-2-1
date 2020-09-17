<?php
$todoTxt = $_POST['todoTxt'];

$db = mysqli_connect('localhost', 'root', '', 'db-todos');


$query = mysqli_query( $db, 'CREATE TABLE IF NOT EXISTS todos ( id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, txtTodo VARCHAR(255) NOT NULL, doneTodo BIT NOT NULL )');
if( $query ){
    if ( mysqli_query( $db, "INSERT INTO todos (txtTodo) VALUES ('{$todoTxt}')")) {

    }else{
        echo 'Error';
    }
}else{
    echo 'Erro2';
}
