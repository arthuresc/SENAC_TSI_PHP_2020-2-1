<?php

    $db = mysqli_connect('localhost', 'root', '', 'db-todos');



    if ( mysqli_query( $db, "INSERT INTO contatos (nome, telefone) VALUES ('{$_POST['nome']}', '{$_POST['tel']}')")) {
        echo "Contato inserido com sucesso";
    }

    while ( $todo = $query->fetch_assoc() ) {

        echo "
        <li class='list-group-item rounded my-2 d-flex flex-row flex-nowrap justify-content-between'>
        <p class='h4 pt-2'>{$todo['txtTodo']}</p>
        <button type='button' class='btn btn-outline-success'>Done</button>
        <button type='button' class='btn btn-outline-danger'>Delete</button>
        </li>
        ";
    }

?>