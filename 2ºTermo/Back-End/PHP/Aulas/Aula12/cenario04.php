<?php

// Cenário 4 – Ciclo da Vida
/* 
    Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar sangue para ajudar outras. 

    RELACIONAMENTOS
    Pessoa > Escolha | ASSOCIAÇÃO
    Pessoa > BancoDeSangue | ASSOCIAÇÃO
    Escolha > BancoDeSangue | ASSOCIAÇÃO
*/

//_____________________________________________

// Class
class Pessoa{
    // Attributes
    private $nome;
    private $idade;
    private $genero;
    private $gestante; // boolean

    // Constructor usando setters
    public function __construct($nome = 'Pessoa', $idade = 0, $genero = '', $gestante = false){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setGenero($genero);
        $this->setGestante($gestante);
    }

    // Getters e Setters
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

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function isGestante(){
        return $this->gestante;
    }

    public function setGestante($gestante){
        $this->gestante = (bool)$gestante;
    }

    // Methods
    public function engravidar(){
        // Apenas mulheres podem engravidar 
        if(strtolower($this->genero) === 'feminino'){
            $this->setGestante(true);
            echo "{$this->nome} está grávida agora.\n";
        } else {
            echo "{$this->nome} não pode engravidar (modelo simples).\n";
        }
    }

    public function nascer(){
        // Retorna uma nova Pessoa recém-nascida
        $bebe = new Pessoa('Bebê de ' . $this->nome, 0, '', false);
        echo "Nasceu um bebê filho/filha de {$this->nome}.\n";
        return $bebe;
    }

    public function crescer(){
        $this->idade += 1;
        echo "{$this->nome} agora tem {$this->idade} anos.\n";
    }

    public function fazerEscolha(Escolha $escolha){
        echo "{$this->nome} vai fazer a escolha: {$escolha->getDescricao()}.\n";
        $escolha->executar($this);
    }

    public function doarSangue(BancoDeSangue $banco, $unidades = 1){
        // Doa apenas se idade >= 16
        if($this->idade >= 16){
            $banco->receberDoacao($this, $unidades);
        } else {
            echo "{$this->nome} é muito jovem para doar sangue.\n";
        }
    }
}

// Class
class Escolha{
    // Attributes
    private $descricao;
    private $impacto;

    public function __construct($descricao = 'Escolha', $impacto = ''){
        $this->setDescricao($descricao);
        $this->setImpacto($impacto);
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getImpacto(){
        return $this->impacto;
    }

    public function setImpacto($impacto){
        $this->impacto = $impacto;
    }

    // Method
    public function executar(Pessoa $pessoa){
        // Exemplo: aplicar impacto (simples), imprimir mensagem
        echo "A escolha '{$this->descricao}' foi executada por {$pessoa->getNome()}. Impacto: {$this->impacto}.\n";
    }
}

// Class
class BancoDeSangue{
    // Attributes
    private $nome;
    private $estoque; // unidades de sangue (int)

    public function __construct($nome = 'Banco de Sangue', $estoque = 0){
        $this->setNome($nome);
        $this->setEstoque($estoque);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($estoque){
        $this->estoque = (int)$estoque;
    }

    // Method
    public function receberDoacao(Pessoa $doador, $unidades = 1){
        $this->estoque += (int)$unidades;
        echo "{$doador->getNome()} doou {$unidades} unidade(s) de sangue para {$this->nome}. Estoque atual: {$this->estoque}.\n";
    }
}


// ------------------ Exemplo simples de uso ------------------
$maria = new Pessoa('Maria', 30, 'Feminino');
$joao = new Pessoa('João', 15, 'Masculino');

$banco = new BancoDeSangue('Hemocentro Local', 10);

$maria->doarSangue($banco, 2);
$joao->doarSangue($banco, 1);

$maria->engravidar();
$bebe = $maria->nascer();
// crescer o bebê 1 ano
$bebe->crescer();

$escolha = new Escolha('Estudar profissão', 'Melhora futuras oportunidades');
$joao->fazerEscolha($escolha);
