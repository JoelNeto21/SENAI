<?php

// Cenário 6 – Leia o enunciado do problema
/* 
    Um sistema de cinema deve permitir que clientes comprem ingressos para sessões de filmes. 
    
    RELACIONAMENTOS
    SistemaDeCinema > Cliente | ASSOCIAÇÃO
    SistemaDeCinema > Filme, Sessao, Ingresso, Sala | AGREGAÇÃO
    Sessao > Filme | ASSOCIAÇÃO
*/

//_____________________________________________

// Class
class SistemaDeCinema{
    private $nome;
    private $sessoes; // array de Sessao

    public function __construct($nome = 'Cinema', $sessoes = array()){
        $this->setNome($nome);
        $this->setSessoes($sessoes);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSessoes(){
        return $this->sessoes;
    }

    public function setSessoes($sessoes){
        $this->sessoes = $sessoes;
    }

    public function adicionarSessao(Sessao $sessao){
        $this->sessoes[] = $sessao;
    }

    // Methods
    public function exibirSessoes(){
        echo "Sessões disponíveis em {$this->nome}:\n";
        foreach($this->sessoes as $s){
            echo "- {$s->getFilme()->getTitulo()} às {$s->getHorario()} (Disponíveis: {$s->getAssentosDisponiveis()})\n";
        }
    }

    public function venderIngresso(Cliente $cliente, Sessao $sessao, $quantidade = 1){
        $vendidos = 0;
        for($i=0;$i<$quantidade;$i++){
            if($sessao->reservarAssento()){
                $ingresso = new Ingresso($cliente, $sessao);
                echo "Ingresso vendido para {$cliente->getNome()} - {$sessao->getFilme()->getTitulo()} às {$sessao->getHorario()}.\n";
                $vendidos++;
            } else {
                echo "Não há mais assentos disponíveis nessa sessão.\n";
                break;
            }
        }
        return $vendidos;
    }
}

// Class
class Cliente{
    private $nome;
    private $idade;

    public function __construct($nome = 'Cliente', $idade = 0){
        $this->setNome($nome);
        $this->setIdade($idade);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = (int)$idade;
    }

    // Methods
    public function comprarIngresso(SistemaDeCinema $sistema, Sessao $sessao, $quantidade = 1){
        return $sistema->venderIngresso($this, $sessao, $quantidade);
    }
}

// Class
class Filme{
    private $titulo;
    private $duracao; // em minutos

    public function __construct($titulo = 'Filme', $duracao = 90){
        $this->setTitulo($titulo);
        $this->setDuracao($duracao);
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuracao($duracao){
        $this->duracao = (int)$duracao;
    }

    public function getDetalhes(){
        return "{$this->titulo} - {$this->duracao} min";
    }
}

// Class
class Sessao{
    private $filme;
    private $horario; // string simples
    private $assentosTotais;
    private $assentosReservados;

    public function __construct(Filme $filme, $horario = '00:00', $assentosTotais = 100){
        $this->setFilme($filme);
        $this->setHorario($horario);
        $this->setAssentosTotais($assentosTotais);
        $this->assentosReservados = 0;
    }

    public function getFilme(){
        return $this->filme;
    }

    public function setFilme(Filme $filme){
        $this->filme = $filme;
    }

    public function getHorario(){
        return $this->horario;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function getAssentosTotais(){
        return $this->assentosTotais;
    }

    public function setAssentosTotais($total){
        $this->assentosTotais = (int)$total;
    }

    public function getAssentosDisponiveis(){
        return $this->assentosTotais - $this->assentosReservados;
    }

    // Methods
    public function reservarAssento(){
        if($this->getAssentosDisponiveis() > 0){
            $this->assentosReservados++;
            return true;
        }
        return false;
    }

    public function liberarAssento(){
        if($this->assentosReservados > 0){
            $this->assentosReservados--;
            return true;
        }
        return false;
    }
}

// Class
class Ingresso{
    private $cliente;
    private $sessao;
    private $codigo;

    public function __construct(Cliente $cliente, Sessao $sessao){
        $this->setCliente($cliente);
        $this->setSessao($sessao);
        $this->codigo = uniqid('ing_');
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente){
        $this->cliente = $cliente;
    }

    public function getSessao(){
        return $this->sessao;
    }

    public function setSessao(Sessao $sessao){
        $this->sessao = $sessao;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function validar(){
        // Em um modelo simples sempre retorna true
        return true;
    }
}

// Class
class Sala{
    private $numero;
    private $capacidade;

    public function __construct($numero = 1, $capacidade = 100){
        $this->setNumero($numero);
        $this->setCapacidade($capacidade);
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }

    public function setCapacidade($capacidade){
        $this->capacidade = (int)$capacidade;
    }

    public function verificarDisponibilidade(Sessao $sessao){
        return $sessao->getAssentosDisponiveis() > 0;
    }
}


// ------------------ Exemplo simples de uso ------------------
$filme = new Filme('Aventura PHP', 120);
$sessao = new Sessao($filme, '19:30', 50);
$cinema = new SistemaDeCinema('CineLocal');
$cinema->adicionarSessao($sessao);

$cliente = new Cliente('Carlos', 30);
$cliente->comprarIngresso($cinema, $sessao, 2);
$cinema->exibirSessoes();
