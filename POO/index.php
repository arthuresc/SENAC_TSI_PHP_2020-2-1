<?php

require './view/produto.view.php';

class Inicio {

	private $objView;

	public function __construct(){

		$this->objView = new ProdutoView;

		if ( !isset( $_POST['gravar'] ) ){

			$this->objView->exibeForm();

		} else {

			$this->objView->setNome($_POST['nome']);
			$this->objView->setDescricao($_POST['descricao']);
			$this->objView->setPreco($_POST['preco']);

			if ( $this->objView->verificaPrecoMinimo() ) {

				$this->objView->gravarDB();

				$this->objView->exibeForm('Gravado com sucesso');

			} else {

				$this->objView->exibeForm('Preço inferior ao mínimo');
			}
		}
	}
}

new Inicio;