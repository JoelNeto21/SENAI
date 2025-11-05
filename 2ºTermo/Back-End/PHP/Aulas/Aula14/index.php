<?php

namespace Aulas\Aula14;

require_once 'Produto.php';
require_once 'ProdutoDAO.php';

$produtoDAO = new ProdutoDAO();

// CREATE _______________________________________________________________________________________

/*

Crie 8 objetos: 
    - Tomate, 
    - Maçã, 
    - Queijo Brie, 
    - Iogurte Grego, 
    - Guaraná Jesus, 
    - Bolacha Bono, 
    - Desinfetante Urca e 
    - Prestobarba Bic. 
    
    | Determine os preços por conta e os códigos de forma aleatória.

*/

$produtoDAO->criarProdutos(new Produto(101, "Tomate", 5.99));
$produtoDAO->criarProdutos(new Produto(102, "Maçã", 3.49));
$produtoDAO->criarProdutos(new Produto(103, "Queijo Brie", 25.00));
$produtoDAO->criarProdutos(new Produto(104, "Iogurte Grego", 7.50));
$produtoDAO->criarProdutos(new Produto(105, "Guaraná Jesus", 4.99));
$produtoDAO->criarProdutos(new Produto(106, "Bolacha Bono", 6.25));
$produtoDAO->criarProdutos(new Produto(107, "Desinfetante Urca", 8.75));
$produtoDAO->criarProdutos(new Produto(108, "Prestobarba Bic", 12.30));

// READ _________________________________________________________________________________________

echo "\nListagem Inicial:\n";
foreach ($produtoDAO->lerProdutos() as $produto) {
    echo  " {$produto->getCod()} | {$produto->getNome()} | R$ {$produto->getPreco()}\n";
}

// UPDATE _______________________________________________________________________________________

/*
    - Modifique o Desinfetante Urca para Desinfetante Barbarex; 
    - E ao menos 2 valores dos preços que voce determinou.
*/

$produtoDAO->atualizarProdutos(107, "Desinfetante Barbarex", 9.50);
$produtoDAO->atualizarProdutos(103, "Queijo Brie", 27.00);
$produtoDAO->atualizarProdutos(106, "Bolacha Bono", 5.99);

echo "\nApós Atualização:\n";
foreach ($produtoDAO->lerProdutos() as $produto) {
    echo  " {$produto->getCod()} | {$produto->getNome()} | R$ {$produto->getPreco()}\n";
}

// DELETE _______________________________________________________________________________________


/*
    - Apague a maça e o Tomate dos produtos (aqui nao somos saudaveis).
*/

$produtoDAO->removerProdutos(101); // Tomate
$produtoDAO->removerProdutos(102); // Maçã

echo "\nApós Remoção:\n";
foreach ($produtoDAO->lerProdutos() as $produto) {
    echo  " {$produto->getCod()} | {$produto->getNome()} | R$ {$produto->getPreco()}\n";
}
echo "\n";
