<?php

namespace Aula10;

echo "Aula 10 - Polimorfismo\n\n";

// Polimorfismo
/* 
    O termo Polimorfismo significa "várias formas". Associando isso a Programação Orientada a Objetos, o conceito se trata de várias classes e suas instâncias (objetos) respondendo a um método de formas diferentes. No exemplo do Interface da Aula_09, temos um método CalcularArea() que responde de formas diferente à classe Quadrado, à classe Pentágono e a classe Círculo. Isso quer dizer que a função é a mesma - calcular a área da formas geométrica - mas a operação muda de acordo com a figura.
*/

echo "#Exemplos de Polimorfismo\n\n";

interface Veiculo
{
    public function mover();
}

class Carro implements Veiculo
{
    private $nome;

    public function __construct($nome)
    {
        $this->setNome($nome);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function mover()
    {
        return "Um carro {$this->getNome()}, está se movendo na estrada.";
    }
}

class Aviao implements Veiculo
{
    private $nome;

    public function __construct($nome)
    {
        $this->setNome($nome);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function mover()
    {
        return "Um avião {$this->nome}, está voando no céu.";
    }
}

$carro1 = new Carro("Fastback");
echo $carro1->mover() . "\n";
$carro2 = new Carro("Kwid");
echo $carro2->mover() . "\n\n";

$aviao1 = new Aviao("Boeing 747");
echo $aviao1->mover() . "\n";
$aviao2 = new Aviao("Cessna 172");
echo $aviao2->mover() . "\n";

