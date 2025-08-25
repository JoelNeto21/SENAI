<?php
//Classe
class Produto
{
    //Atributos
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    //Construtor
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }

    //Métodos
    public function atualizarEstoque($qtde_vendida)
    {
        $this->qtde_estoque -= $qtde_vendida;
        return $this->qtde_estoque;
    }
}

//Objetos (without __construct)
// $produto1 = new Produto();
// $produto1->nome = "Suco Tang";
// $produto1->categoria = "Bebidas";
// $produto1->fornecedor = "Mondelez";
// $produto1->qtde_estoque = 200;

// $produto2 = new Produto();
// $produto2->nome = "Energético Monster";
// $produto2->categoria = "Bebidas";
// $produto2->fornecedor = "Coca-Cola";
// $produto2->qtde_estoque = 150;

//Objetos (with __construct)
$produto1 = new Produto("Suco Tang", "Bebidas", "Mondelez", 200);
$produto2 = new Produto("Energético Monster", "Bebidas", "Coca-Cola", 150);
