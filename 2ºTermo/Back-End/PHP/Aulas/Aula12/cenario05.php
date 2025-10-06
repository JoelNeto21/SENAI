<?php

// Cenário 5 – Analise o problema com linguagem natural
/* 
    Um sistema de biblioteca deve permitir que usuários (alunos e professores) façam empréstimos de livros e revistas. 

    RELACIONAMENTOS
    SistemaDeBiblioteca > Usuario | ASSOCIAÇÃO
    SistemaDeBiblioteca > ItemBibliotecario | AGREGAÇÃO
    Usuario > Emprestimo | COMPOSIÇÃO
*/

//_____________________________________________

// Class
class SistemaDeBiblioteca{
    private $nome;
    private $catalogo; // array de ItemBibliotecario
    private $emprestimos; // array de Emprestimo

    public function __construct($nome = 'Biblioteca', $catalogo = array()){
        $this->setNome($nome);
        $this->setCatalogo($catalogo);
        $this->emprestimos = array();
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCatalogo(){
        return $this->catalogo;
    }

    public function setCatalogo($catalogo){
        $this->catalogo = $catalogo;
    }

    public function adicionarItem(ItemBibliotecario $item){
        $this->catalogo[] = $item;
    }

    // Methodos
    public function registrarEmprestimo(Emprestimo $emprestimo){
        $this->emprestimos[] = $emprestimo;
        echo "Emprestimo registrado para {$emprestimo->getUsuario()->getNome()} (item: {$emprestimo->getItem()->getTitulo()}).\n";
    }

    public function registrarDevolucao(Emprestimo $emprestimo){
        // Remover da lista simples (procura por referência de objeto)
        foreach($this->emprestimos as $k => $e){
            if($e === $emprestimo){
                unset($this->emprestimos[$k]);
                echo "Devolução registrada: {$emprestimo->getItem()->getTitulo()} por {$emprestimo->getUsuario()->getNome()}.\n";
                return;
            }
        }
        echo "Empréstimo não encontrado para devolução.\n";
    }
}

// Class
class Usuario{
    private $nome;
    private $tipo; // aluno, professor
    private $idade;

    public function __construct($nome = 'Usuário', $tipo = 'aluno', $idade = 0){
        $this->setNome($nome);
        $this->setTipo($tipo);
        $this->setIdade($idade);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = (int)$idade;
    }

    // Methods
    public function solicitarEmprestimo(SistemaDeBiblioteca $sistema, ItemBibliotecario $item){
        if($item->estaDisponivel()){
            $emprestimo = new Emprestimo($this, $item);
            $item->emprestar();
            $sistema->registrarEmprestimo($emprestimo);
            return $emprestimo;
        } else {
            echo "Item '{$item->getTitulo()}' não disponível para empréstimo.\n";
            return null;
        }
    }

    public function devolverItem(SistemaDeBiblioteca $sistema, Emprestimo $emprestimo){
        $emprestimo->getItem()->devolver();
        $sistema->registrarDevolucao($emprestimo);
    }
}

// Class
class ItemBibliotecario{
    private $titulo;
    private $tipo; // livro, revista
    private $disponivel;

    public function __construct($titulo = 'Item', $tipo = 'livro', $disponivel = true){
        $this->setTitulo($titulo);
        $this->setTipo($tipo);
        $this->setDisponivel($disponivel);
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function estaDisponivel(){
        return (bool)$this->disponivel;
    }

    public function setDisponivel($disponivel){
        $this->disponivel = (bool)$disponivel;
    }

    // Methodos
    public function emprestar(){
        $this->disponivel = false;
        echo "O item '{$this->titulo}' foi emprestado.\n";
    }

    public function devolver(){
        $this->disponivel = true;
        echo "O item '{$this->titulo}' foi devolvido e está disponível.\n";
    }
}

// Class
class Emprestimo{
    private $usuario;
    private $item;
    private $data; // string simples

    public function __construct(Usuario $usuario, ItemBibliotecario $item, $data = null){
        $this->setUsuario($usuario);
        $this->setItem($item);
        $this->setData($data ?? date('Y-m-d'));
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario){
        $this->usuario = $usuario;
    }

    public function getItem(){
        return $this->item;
    }

    public function setItem(ItemBibliotecario $item){
        $this->item = $item;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    // Method
    public function finalizar(){
        echo "Empréstimo de '{$this->item->getTitulo()}' por {$this->usuario->getNome()} finalizado em {$this->data}.\n";
    }
}


// ------------------ Exemplo simples de uso ------------------
$sistema = new SistemaDeBiblioteca('Biblioteca Escolar');
$item1 = new ItemBibliotecario('Programação em PHP', 'livro');
$item2 = new ItemBibliotecario('Revista de Ciências', 'revista');

$sistema->adicionarItem($item1);
$sistema->adicionarItem($item2);

$usuario = new Usuario('Ana', 'aluno', 20);

$emprestimo = $usuario->solicitarEmprestimo($sistema, $item1);
if($emprestimo){
    // Devolver depois
    $usuario->devolverItem($sistema, $emprestimo);
}
