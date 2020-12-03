<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Produto extends PDO {

    //Atributos ou propriedades
    protected $nome, $descricao, $preco; //só dentro da classe ela pode ser alterada

    public function __construct(string $nome, string $descricao, string $preco)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;

        parent::__construct('mysql:dbname=db_login;host=localhost', 'root', '');
    }
	public function setNome(string $nome): bool
	{
		return $this->nome = $nome;
	}

	public function setDescricao(string $descricao): bool
	{
		return $this->descricao = $descricao;
	}	

	public function setPreco(float $preco): bool
	{
		return $this->preco = $preco;
	}	
    //Não é função é MÉTODO
    public function gravarDB(): bool
    {
        $stmt = $this->prepare('    INSERT INTO produtos
                                (nome,descricao,preco,imagem)
                            VALUES
                                (:nome, :descricao, :preco) ');
        $stmt->bindParam( ':nome', $this->nome );
        $stmt->bindParam( ':descricao', $this->descricao );
        $stmt->bindParam( ':preco', $this->preco );

        return $stmt->execute(); //retorna um bool

    }
}

