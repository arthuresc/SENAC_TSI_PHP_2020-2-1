<?php

$dsn = 'mysql:dbname=db_login;host=localhost';//trocar dockerhost para localhost

//Tutorial para instalação dos drivers: 
//https://hcode.com.br/blog/instalando-sql-server-e-conectando-com-php

//DSN para SQL Server
//$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=MyDatabase';
$user = 'root';
$password = '';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);