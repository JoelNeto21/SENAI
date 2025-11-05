<?php

namespace Aulas\Aula14;

class Produto
{
	private $cod;
	private $nome;
	private $preco;

	public function __construct($cod, $nome, $preco) {

		$this->cod = $cod;
		$this->nome = $nome;
		$this->preco = $preco;
	}

    // Getters e Setters

	public function getcod() {
		return $this->cod;
	}

	public function setcod($value) {
		$this->cod = $value;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($value) {
		$this->nome = $value;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setPreco($value) {
		$this->preco = $value;
	}
}