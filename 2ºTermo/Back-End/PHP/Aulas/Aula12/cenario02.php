<?php

// Cenário 2 – Heróis e Personagens
/* 
    O Batman, o Superman e o Homem-Aranha estão em uma missão. 
    Eles precisam fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar brinquedos às crianças. 

    RELACIONAMENTOS
    Heroi > Missao | ASSOCIAÇÃO
    Missao > LocalDeTreinamento | AGREGAÇÃO
    LocalDeTreinamento > Shopping | ASSOCIAÇÃO
    Crianca > Brinquedo | ASSOCIAÇÃO
*/

//_____________________________________________

// Class
class Heroi{
    // Attributes
    private $nome;
    private $poder;

    public function __construct($nome = 'Herói', $poder = ''){
        $this->setNome($nome);
        $this->setPoder($poder);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPoder(){
        return $this->poder;
    }

    public function setPoder($poder){
        $this->poder = $poder;
    }

    // Methodos simples
    public function treinar($localTreino){
        $local = (is_object($localTreino) && method_exists($localTreino, 'getNome')) ? $localTreino->getNome() : 'local de treino';
        echo "{$this->nome} está treinando em {$local}.\n";
    }

    public function realizarMissao($missao){
        $nomeMissao = (is_object($missao) && method_exists($missao, 'getNome')) ? $missao->getNome() : 'uma missão';
        echo "{$this->nome} iniciou a missão: {$nomeMissao}.\n";
    }

    public function doarBrinquedo($brinquedo, $crianca, $shopping){
        $tipo = (is_object($brinquedo) && method_exists($brinquedo, 'getTipo')) ? $brinquedo->getTipo() : 'brinquedo';
        $criancaNome = (is_object($crianca) && method_exists($crianca, 'getNome')) ? $crianca->getNome() : 'criança';
        $local = (is_object($shopping) && method_exists($shopping, 'getNome')) ? $shopping->getNome() : 'shopping';
        echo "{$this->nome} doou um(a) {$tipo} para {$criancaNome} no {$local}.\n";
    }
}

// Class
class Missao{
    private $nome;
    private $objetivo;

    public function __construct($nome = 'Missão', $objetivo = ''){
        $this->setNome($nome);
        $this->setObjetivo($objetivo);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getObjetivo(){
        return $this->objetivo;
    }

    public function setObjetivo($objetivo){
        $this->objetivo = $objetivo;
    }

    public function iniciar(){
        echo "Missão '{$this->nome}' iniciada. Objetivo: {$this->objetivo}.\n";
    }

    public function finalizar(){
        echo "Missão '{$this->nome}' finalizada.\n";
    }
}

// Class
class LocalDeTreinamento{
    private $nome;
    private $tipo;

    public function __construct($nome = 'Local', $tipo = ''){
        $this->setNome($nome);
        $this->setTipo($tipo);
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

    public function oferecerTreinamento(){
        echo "Oferecendo treinamento em {$this->nome} ({$this->tipo}).\n";
    }
}

// Class
class Shopping{
    private $nome;
    private $endereco;

    public function __construct($nome = 'Shopping', $endereco = ''){
        $this->setNome($nome);
        $this->setEndereco($endereco);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function receberDoacao($heroi, $brinquedo, $crianca){
        $heroiNome = (is_object($heroi) && method_exists($heroi, 'getNome')) ? $heroi->getNome() : 'Alguém';
        $tipo = (is_object($brinquedo) && method_exists($brinquedo, 'getTipo')) ? $brinquedo->getTipo() : 'brinquedo';
        $criancaNome = (is_object($crianca) && method_exists($crianca, 'getNome')) ? $crianca->getNome() : 'criança';
        echo "{$this->nome} recebeu doação: {$heroiNome} doou um(a) {$tipo} para {$criancaNome}.\n";
    }
}

// Class
class Brinquedo{
    private $tipo;
    private $nome;

    public function __construct($tipo = 'brinquedo', $nome = ''){
        $this->setTipo($tipo);
        $this->setNome($nome);
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}

// Class
class Crianca{
    private $nome;
    private $idade;

    public function __construct($nome = 'Criança', $idade = null){
        $this->nome = $nome;
        $this->idade = $idade;
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
        $this->idade = $idade;
    }

    public function receberBrinquedo($brinquedo){
        $tipo = (is_object($brinquedo) && method_exists($brinquedo, 'getTipo')) ? $brinquedo->getTipo() : 'brinquedo';
        echo "{$this->nome} recebeu um(a) {$tipo}.\n";
    }
}


// ------------------ Exemplo simples de uso ------------------
$batman = new Heroi('Batman', 'Intel/Força');
$superman = new Heroi('Superman', 'Força/Voo');
$aranha = new Heroi('Homem-Aranha', 'Agilidade/Força');

$cotil = new LocalDeTreinamento('Cotil', 'campo de treino');
$shopping = new Shopping('Shopping Center', 'Av. Principal, 100');

$missao = new Missao('Missão Doar Brinquedos', 'Levar alegria às crianças carentes');

$brinquedo1 = new Brinquedo('boneca', 'Boneca de pano');
$brinquedo2 = new Brinquedo('carrinho', 'Carrinho de brinquedo');

$crianca1 = new Crianca('Ana', 6);
$crianca2 = new Crianca('Pedro', 8);

$cotil->oferecerTreinamento();
$batman->treinar($cotil);
$superman->treinar($cotil);
$aranha->treinar($cotil);

$missao->iniciar();

$batman->realizarMissao($missao);
$superman->realizarMissao($missao);
$aranha->realizarMissao($missao);

$shopping->receberDoacao($batman, $brinquedo1, $crianca1);
$batman->doarBrinquedo($brinquedo1, $crianca1, $shopping);

$shopping->receberDoacao($superman, $brinquedo2, $crianca2);
$superman->doarBrinquedo($brinquedo2, $crianca2, $shopping);

$crianca1->receberBrinquedo($brinquedo1);
$crianca2->receberBrinquedo($brinquedo2);

$missao->finalizar();

