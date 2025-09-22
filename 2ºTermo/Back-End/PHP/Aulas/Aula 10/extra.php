<?php

namespace Aula10;

// Interfaces
interface Movel
{
    public function mover();
}

interface Abastecivel
{
    public function abastecer($quantidade);
}

interface Manutenivel
{
    public function fazerManutencao();
}


// Classes
class Carro__ implements Movel, Abastecivel
{
    public function mover()
    {
        return "O carro está se movimentando.";
    }

    public function abastecer($quantidade)
    {
        return "O carro foi abastecido com {$quantidade} litros.";
    }
}

class Bicicleta implements Movel, Manutenivel
{
    public function mover()
    {
        return "A bicicleta está pedalando.";
    }

    public function fazerManutencao()
    {
        return "A bicicleta foi lubrificada.";
    }
}

class Onibus implements Movel, Abastecivel, Manutenivel
{
    public function mover()
    {
        return "O ônibus está transportando passageiros.";
    }

    public function abastecer($quantidade)
    {
        return "O ônibus foi abastecido com {$quantidade} litros.";
    }

    public function fazerManutencao()
    {
        return "O ônibus está passando por revisão.";
    }
}

// Objetos
echo "\n| Carro\n\n";
$carro = new Carro__();
echo $carro->mover() . "\n";
echo $carro->abastecer(30) . "\n\n";

echo "\n| Bicicleta\n\n";
$bicicleta = new Bicicleta();
echo $bicicleta->mover() . "\n";
echo $bicicleta->fazerManutencao() . "\n\n";

echo "\n| Ônibus\n\n";
$onibus = new Onibus();
echo $onibus->mover() . "\n";
echo $onibus->abastecer(150) . "\n";
echo $onibus->fazerManutencao() . "\n";
