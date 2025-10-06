<?php

// Cenário 3 – Fantasia e Destino
/* 
    John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. 
    Durante o caminho, começa a chover, e eles precisam amar uns aos outros para superar as dificuldades. 
    No fim da jornada, eles celebram ao comer juntos. 

    RELACIONAMENTOS
    Personagem > Jornada | ASSOCIAÇÃO
    Jornada > Clima | AGREGAÇÃO
    Personagem > Dificuldade, Refeicao | ASSOCIAÇÃO
*/

//_____________________________________________

// Class
class Personagem{
    // Attributes
    private $nome;
    private $papel;

    public function __construct($nome = 'Personagem', $papel = ''){
        $this->setNome($nome);
        $this->setPapel($papel);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPapel(){
        return $this->papel;
    }

    public function setPapel($papel){
        $this->papel = $papel;
    }

    // Methods
    public function seguirJornada($jornada){
        $jNome = (is_object($jornada) && method_exists($jornada, 'getNome')) ? $jornada->getNome() : 'jornada';
        echo "{$this->nome} está seguindo a jornada: {$jNome}.\n";
    }

    public function enfrentarDesafio($dificuldade){
        $desc = (is_object($dificuldade) && method_exists($dificuldade, 'getDescricao')) ? $dificuldade->getDescricao() : 'um desafio';
        echo "{$this->nome} está enfrentando: {$desc}.\n";
    }

    public function celebrar($refeicao){
        $prato = (is_object($refeicao) && method_exists($refeicao, 'getPrato')) ? $refeicao->getPrato() : 'uma refeição';
        echo "{$this->nome} celebra com {$prato}.\n";
    }
}

// Class
class Jornada{
    private $nome;
    private $etapas;

    public function __construct($nome = 'Jornada', $etapas = array()){
        $this->setNome($nome);
        $this->setEtapas($etapas);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEtapas(){
        return $this->etapas;
    }

    public function setEtapas($etapas){
        $this->etapas = $etapas;
    }

    public function avancar(){
        echo "A jornada '{$this->nome}' avança para a próxima etapa.\n";
    }
}

// Class
class Clima{
    private $estado;

    public function __construct($estado = 'ensolarado'){
        $this->setEstado($estado);
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function mudar($novoEstado){
        $antigo = $this->estado;
        $this->estado = $novoEstado;
        echo "O clima mudou de {$antigo} para {$this->estado}.\n";
    }
}

// Class
class Dificuldade{
    private $descricao;
    private $nivel;

    public function __construct($descricao = 'Dificuldade', $nivel = 'médio'){
        $this->setDescricao($descricao);
        $this->setNivel($nivel);
    }

    public function getDescricao(){
        return $this->descricao . ' (nível: ' . $this->nivel . ')';
    }

    // Getters and setters
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    public function superar($personagem){
        $nome = (is_object($personagem) && method_exists($personagem, 'getNome')) ? $personagem->getNome() : 'Alguém';
        echo "{$nome} superou a dificuldade: {$this->descricao}. (nível: {$this->nivel})\n";
    }
}

// Class
class Refeicao{
    private $prato;
    private $descricao;

    public function __construct($prato = 'Prato', $descricao = ''){
        $this->setPrato($prato);
        $this->setDescricao($descricao);
    }

    public function getPrato(){
        return $this->prato;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setPrato($prato){
        $this->prato = $prato;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function servir($personagem){
        $nome = (is_object($personagem) && method_exists($personagem, 'getNome')) ? $personagem->getNome() : 'Alguém';
        echo "Servindo {$this->prato} para {$nome}. {$this->descricao}\n";
    }
}


// ------------------ Exemplo simples de uso ------------------
$p1 = new Personagem('John Snow', 'Guerreiro');
$p2 = new Personagem('Papai Smurf', 'Líder');
$p3 = new Personagem('Deadpool', 'Anti-herói');
$p4 = new Personagem('Dexter', 'Serial Killer');

$jornada = new Jornada('Jornada do Destino');
$clima = new Clima('ensolarado');
$dificuldade = new Dificuldade('Chuva forte', 'alto');
$refeicao = new Refeicao('Banquete de celebração', 'Comida para reunir amigos');

$clima->mudar('chuva');
$jornada->avancar();

$p1->seguirJornada($jornada);
$p2->seguirJornada($jornada);
$p3->seguirJornada($jornada);
$p4->seguirJornada($jornada);

$dificuldade->superar($p1);
$p1->enfrentarDesafio($dificuldade);

// Mostrar espírito de união (simples)
echo "Eles mostram amor e união para superar as dificuldades.\n";

$refeicao->servir($p1);
$refeicao->servir($p2);
$refeicao->servir($p3);
$refeicao->servir($p4);

$p1->celebrar($refeicao);
$p2->celebrar($refeicao);
$p3->celebrar($refeicao);
$p4->celebrar($refeicao);
