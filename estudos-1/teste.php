<?php
$db = mysqli_connect('localhost', 'root', '', 'aulaPHP');  //endereço do BD / usuario do BD / senha do BD / nome do BD

$query = mysqli_query(  $db, //faz consulta no banco - cria tabela se ela não existir
                            'CREATE TABLE IF NOT EXISTS todos
                                (   id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                    todo VARCHAR(255) NOT NULL,
                                    telefone BIT NOT NULL)');

if ( $query ) {
    echo 'Tabela criada com sucesso! <br>';
}

$query = mysqli_query ( $db, ' SELECT * FROM contatos ');


echo 'Criar a tabela pros contatos';

echo '<ul class="list">';

if ( mysqli_query( $db, "INSERT INTO contatos (nome, telefone) VALUES ('{$_POST['nome']}', '{$_POST['tel']}')")) {
    echo "Contato inserido com sucesso";
}

while ( $registro = $query->fetch_assoc() ) {

    echo "
    <li>
    <b class='h4'>{$registro['id']}</b>
    <h3 class='h4'>{$registro['nome']}</h3>
    <p class='h4'>{$registro['telefone']}</p>
    </li>
    ";
}
echo '</ul>'; 

/* if ( mysqli_query( $db, 'DELETE FROM contatos WHERE id = 10') ) {
    echo "registro apagado com sucesso";
} else {
    echo "Não foi possivel apagar";
} */

echo "<br><br>Nome enviado: {$_POST['nome']}, telefone: {$_POST['tel']}";