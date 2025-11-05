<?php

namespace Aulas\Aula14;

class ProdutoDAO
{
    private $produtos = [];
    private $arquivo = 'produtos.json';

    // Construtor ProdutoDAO --> Carrega os dados do arquivo JSON ao iniciar a aplicação
    public function __construct()
    {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);
            if ($dados) {
                foreach ($dados as $cod => $info) {
                    $this->produtos[$cod] = new Produto(
                        $info['cod'],
                        $info['nome'],
                        $info['preco']
                    );
                }
            }
        }
    }

    // Método auxiliar --> para salvar os dados no arquivo JSON
    private function salvarEmArquivo()
    {
        $dados = [];
        foreach ($this->produtos as $cod => $produto) {
            $dados[$cod] = [
                'cod' => $produto->getCod(),
                'nome' => $produto->getNome(),
                'preco' => $produto->getPreco()
            ];
        }
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    // CREATE
    public function criarProdutos(Produto $produto)
    {
        $this->produtos[$produto->getCod()] = $produto;
        $this->salvarEmArquivo();
    }

    // READ
    public function lerProdutos()
    {
        return $this->produtos;
    }

    // UPDATE
    public function atualizarProdutos($cod, $nome, $preco)
    {
        if (isset($this->produtos[$cod])) {
            $this->produtos[$cod]->setNome($nome);
            $this->produtos[$cod]->setPreco($preco);
        }
        $this->salvarEmArquivo();
    }

    // DELETE
    public function removerProdutos($cod)
    {
        unset($this->produtos[$cod]);
        $this->salvarEmArquivo();
    }
}
