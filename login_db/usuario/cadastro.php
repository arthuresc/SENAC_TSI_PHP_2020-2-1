<?php

require 'model/dados.php';

if ( isset($_POST['cadastrar']) ) { 

	require 'controller/consist_cadastro.php';
}else if (isset($_SESSION['login'])){
	header('Location: ../../index.php');
}

include 'view/cadastro_tpl.php';