<?php

chdir( __DIR__ );

require '../controller/produto.controller.php';

class ProdutoView extends ProdutoController {

	public function __construct(){

		parent::__construct( '', '', 0.0);
	}

	public function exibeForm(string $msg = null){

		include 'form_produto.php';
	}
}