<?php

namespace Aula10;

echo "\n| Exercício 1 - Formas Geométricas\n\n";

interface Forma
{
    public function calcularArea();
}

class Quadrado implements Forma
{
    private $lado;

    public function __construct($lado)
    {
        $this->setLado($lado);
    }

    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function calcularArea()
    {
        return $this->getLado() * $this->getLado();
    }
}

class Retangulo implements Forma
{
    private $base;
    private $altura;

    public function __construct($base, $altura)
    {
        $this->setBase($base);
        $this->setAltura($altura);
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function calcularArea()
    {
        return $this->getBase() * $this->getAltura();
    }
}

class Circulo implements Forma
{
    private $raio;

    public function __construct($raio)
    {
        $this->setRaio($raio);
    }

    public function setRaio($raio)
    {
        $this->raio = $raio;
    }

    public function getRaio()
    {
        return $this->raio;
    }

    public function calcularArea()
    {
        return pi() * ($this->getRaio() ** 2);
    }
}

$quadrado = new Quadrado(5);
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";

$retangulo = new Retangulo(4, 6);
echo "Área do retângulo: " . $retangulo->calcularArea() . "\n";

$circulo = new Circulo(3);
echo "Área do círculo: " . $circulo->calcularArea() . "\n\n";


// ----------------------------------------------------------------

echo "\n| Exercício 2 - Animais e Sons\n\n";

class Animal
{
    public function fazerSom()
    {
        return "Som genérico de animal.";
    }
}

class Cachorro extends Animal
{
    public function fazerSom()
    {
        return "Au au!";
    }
}

class Gato extends Animal
{
    public function fazerSom()
    {
        return "Miau!";
    }
}

class Vaca extends Animal
{
    public function fazerSom()
    {
        return "Muuu!";
    }
}

$cachorro = new Cachorro();
echo "Cachorro: " . $cachorro->fazerSom() . "\n";

$gato = new Gato();
echo "Gato: " . $gato->fazerSom() . "\n";

$vaca = new Vaca();
echo "Vaca: " . $vaca->fazerSom() . "\n\n";

// ----------------------------------------------------------------

echo "\n| Exercício 3 - Meios de Transporte\n\n";

abstract class Transporte
{
    abstract public function mover();
}
class Carro_ extends Transporte
{
    public function mover()
    {
        return "O carro está andando na estrada.";
    }
}

class Aviao_ extends Transporte
{
    public function mover()
    {
        return "O avião está voando no céu.";
    }
}

class Elevador_ extends Transporte
{
    public function mover()
    {
        return "O elevador está correndo pelo prédio.";
    }
}

class Barco_ extends Transporte
{
    public function mover()
    {
        return "O barco está navegando no mar.";
    }
}

$carro = new Carro_();
echo $carro->mover() . "\n";

$aviao = new Aviao_();
echo $aviao->mover() . "\n";

$elevador = new Elevador_();
echo $elevador->mover() . "\n";

$barco = new Barco_();
echo $barco->mover() . "\n\n";

// ----------------------------------------------------------------

echo "\n| Exercício 4 - Notificações\n\n";

class Email
{
    public function enviar()
    {
        return "Enviando email...\n";
    }
}

class Sms
{
    public function enviar()
    {
        return "Enviando SMS...\n";
    }
}

function notificar($meio)
{
    try {
        echo $meio->enviar();
    } catch (\Error $e) {
        echo "ERRO! A mensagem não pode ser enviada.\n";
    }
}

$email = new Email();
$sms = new Sms();
notificar($email);
notificar($sms);
echo "\n";

// ----------------------------------------------------------------

echo "\n| Exercício 5 - Calculadora com Sobrecarga Simulada\n\n";

class Calculadora
{
    public function somar(...$numeros)
    {
        return array_sum($numeros);
    }
}
$calc = new Calculadora();
echo "Soma de 2 números: " . $calc->somar(5, 10) . "\n"; // 15
echo "Soma de 3 números: " . $calc->somar(5, 10, 15) . "\n"; // 30
echo "Soma de 4 números: " . $calc->somar(5, 10, 15, 20) . "\n"; // 50
echo "\n";
