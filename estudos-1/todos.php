<?php

$db = mysqli_connect('localhost', 'root', '', 'db-todos');

if(mysqli_query( $db, 'CREATE TABLE IF NOT EXISTS todos ( id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, txtTodo VARCHAR(max) NOT NULL, doneTodo BIT NOT NULL )')){
    echo 'db validado';
}else{
    echo 'db error';
}

