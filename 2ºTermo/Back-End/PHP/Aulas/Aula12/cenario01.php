<?php

// Cenário 1 – Viagem pelo Mundo
/* 
    Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. 
    Em cada lugar da Terra, eles poderão comer comidas típicas e nadar em rios ou praias. 

    RELACIONAMENTOS
    Turista > Localidade | ASSOCIAÇÃO
    Localidade > Atividade | AGREGAÇÃO
    Atividade > Comida, CorpoDagua | ASSOCIAÇÃO
*/

//_____________________________________________

// Class
class Turista
{
    // Attributes
    private $nome;
    private $idade;

    // Constructor simples
    public function __construct($nome = 'Turista', $idade = null)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
    }

    // Getters / Setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        if (!$idade) {
            echo "[ERRO] Insira um valor válido...";
        } else {
            $this->idade = $idade;
        }
    }

    // Methods
    public function visitar($localidade)
    {
        $localNome = (is_object($localidade) && method_exists($localidade, 'getNome')) ? $localidade->getNome() : 'um lugar';
        echo "{$this->nome} está visitando: {$localNome}.\n";
    }

    public function comer($comida)
    {
        $comidaNome = (is_object($comida) && method_exists($comida, 'getNome')) ? $comida->getNome() : 'algo';
        echo "{$this->nome} está comendo: {$comidaNome}.\n";
    }

    public function nadar($corpoDagua)
    {
        $tipo = (is_object($corpoDagua) && method_exists($corpoDagua, 'getTipo')) ? $corpoDagua->getTipo() : "um corpo d'água";
        $nome = (is_object($corpoDagua) && method_exists($corpoDagua, 'getNome')) ? $corpoDagua->getNome() : '';
        echo "{$this->nome} está nadando em {$tipo} {$nome}.\n";
    }
}

// Class
class Localidade
{
    // Attributes
    private $nome;
    private $atividades;

    public function __construct($nome = 'Local', $atividades = array())
    {
        $this->setNome($nome);
        $this->setAtividades($atividades);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getAtividades()
    {
        return $this->atividades;
    }

    public function setAtividades($atividades)
    {
        $this->atividades = $atividades;
    }

    public function adicionarAtividade($atividade)
    {
        $this->atividades[] = $atividade;
    }

    public function informarAtividades()
    {
        echo ">> Atividades em {$this->nome}:\n";
        if (empty($this->atividades)) {
            echo "Nenhuma atividade cadastrada.\n";
            return;
        }
        foreach ($this->atividades as $atv) {
            $nome = (is_object($atv) && method_exists($atv, 'getNome')) ? $atv->getNome() : 'atividade';
            echo "- {$nome}\n";
        }
    }
}

// Class
class Atividade
{
    // Attributes
    private $nome;
    private $descricao;

    public function __construct($nome = 'Atividade', $descricao = '...')
    {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    // Method
    public function executar($turista = null)
    {
        $turistaNome = (is_object($turista) && method_exists($turista, 'getNome')) ? $turista->getNome() : 'Alguém';
        echo "{$turistaNome} está realizando a atividade: {$this->nome}. {$this->descricao}\n";
    }
}

// Class
class Comida
{
    // Attributes
    private $nome;
    private $descricao;

    public function __construct($nome = 'Comida', $descricao = '')
    {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}

// Class
class CorpoDagua
{
    // Attributes
    private $nome;
    private $tipo;

    public function __construct($nome = '', $tipo = '')
    {
        $this->setNome($nome);
        $this->setTipo($tipo);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}


// ------------------ Exemplo simples de uso ------------------
$t1 = new Turista('João', 28);
$t2 = new Turista('Maria', 25);

$sushi = new Comida('Sushi', 'Comida típica do Japão, feita com peixe e arroz.');
$feijoada = new Comida('Feijoada', 'Prato tradicional brasileiro com feijão preto e carnes.');
$peixeAcre = new Comida('Peixe do Acre', 'Peixe regional, servido com temperos do Norte.');

$oceano = new CorpoDagua('Pacífico', 'oceano');
$rio = new CorpoDagua('Rio Amazonas', 'rio');
$rioAcre = new CorpoDagua('Rio Acre', 'rio');

$atividadeVisitar = new Atividade('Visitar pontos turísticos', 'Passeios e visitas culturais.');
$atividadeComer = new Atividade('Provar comida típica', 'Degustar pratos locais.');
$atividadeNadar = new Atividade('Nadar em águas locais', 'Atividade aquática para se refrescar.');

$japao = new Localidade('Japão', array($atividadeVisitar, $atividadeComer));
$brasil = new Localidade('Brasil', array($atividadeVisitar, $atividadeComer, $atividadeNadar));
$acre = new Localidade('Acre', array($atividadeVisitar, $atividadeNadar));

// Mostrar atividades
$japao->informarAtividades();
$brasil->informarAtividades();
$acre->informarAtividades();

// Simulações simples
$t1->visitar($japao);
$t1->comer($sushi);
$t1->nadar($oceano);

$t2->visitar($acre);
$t2->comer($peixeAcre);
$t2->nadar($rioAcre);

$atividadeComer->executar($t1);
$atividadeNadar->executar($t2);
