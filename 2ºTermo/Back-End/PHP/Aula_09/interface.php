<?php
/*
Modificadores de acesso:
    - Public: métodos e attributos públicos
    - Private: métodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessá-los
    - Protected: métodos e atributos protegidos para acesso somente da classe e de suas classes filhas

Pacotes (packages):
    Sintaxe logo no início do código, que atribui de onde os arquivos pertencem,ou seja, o caminho da pasta em que ele está contido.
    [ ex.: 'namespace Aula 09;' ]
    *Caso tenha mais arquivos que formam o Backend de uma página WEB e possuem a mesma raiz, o 'nomespace' será o mesmo
*/

namespace Aula_09;

/*
Interface: 
    É um recurso no qual garante que obrigatoriamente a classe tenha que construir algum método previamente determinado. Funciona como um contrato.
    Exemplo: Configuramos uma interface "Pagamento" que faz com que qualquer classe que a implemente, tenha que obrigatoriamente construir o método "pagar()".
*/

interface Pagamento
{
    public function pagar($valor);
}

class CartaoDeCredito implements Pagamento
{
    public function pagar($valor)
    {
        $valor = number_format($valor, 2, ',', '.');
        echo "Pagamento realizado com o cartão de crédito, valor: R$$valor\n";
    }
}

class PIX implements Pagamento
{
    public function pagar($valor)
    {
        $valor = number_format($valor, 2, ',', '.');
        echo "Pagamento realizado via PIX, valor: R$$valor\n";
    }
}

class dinheiroEspecie implements Pagamento
{
    public function pagar($valor)
    {
        $valor *= 0.9;
        $valor = number_format($valor, 2, ',', '.');
        echo "Pagamento realizado com dinheiro em espécie, valor: R$$valor | (Desconto de 10% aplicado!)\n";
    }
}

echo "| PAGAMENTO\n\n";

$cred = new CartaoDeCredito();
echo "\t⇱ Teste de pagamento via cartão de crédito" . $cred->pagar(250);
echo "\n\n";

$pix = new PIX();
echo "\t⇱ Teste de pagamento via PIX" . $pix->pagar(65);
echo "\n\n";

$din = new dinheiroEspecie();
echo "\t⇱ Teste de pagamento via dinheiro em espécie" . $din->pagar(320);


echo "\n\n____________________________________________________________________________________\n\n";
echo "| FORMA\n\n";


interface Forma
{
    public function calcularArea($n1, $n2);
}

class Quadrado implements Forma
{
    public function calcularArea($l, $n)
    {
        $a = $l * $l;
        $a = number_format($a, 1, ',', '.');
        echo ">> Área do Quadrado = $a un\n";
    }
}
class Circulo implements Forma
{
    public function calcularArea($r, $n)
    {
        $a = pi() * ($r * $r);
        $a = number_format($a, 1, ',', '.');
        echo ">> Área do Circulo = $a un\n";
    }
}

class Pentagono implements Forma
{
    public function calcularArea($l, $ap)
    {
        $a = (5*$l * $ap) / 2;
        $a = number_format($a, 1, ',', '.');
        echo ">> Área do Quadrado = $a un\n";
    }
}

class Hexagono implements Forma
{
    public function calcularArea($l, $ap)
    {
        $a = (6*$l * $ap) / 2;
        $a = number_format($a, 1, ',', '.');
        echo ">> Área do Quadrado = $a un\n";
    }
}

$square = new Quadrado();
$square->calcularArea(readline("Digite a medida do lado do Quadrado: "), 0);
echo "\n\n";

$circle = new Circulo();
$circle->calcularArea(readline("Digite a medida do raio da Circunferência: "), 0);
echo "\n\n";

$circle = new Pentagono();
$circle->calcularArea(readline("Digite a medida do lado do Pentagono: "), readline("Digite a medida da apótema do Pentagono: "));
echo "\n\n";

$circle = new Hexagono();
$circle->calcularArea(readline("Digite a medida do lado do Hexagono: "), readline("Digite a medida da apótema do Hexagono: "));
echo "\n\n";
