<?php
//Classe
class Moto
{
    //Atributos
    public $marca;
    public $modelo;
    public $cilindrada;
    public $ano;
    public $bateu;

    // Construtores
    // public function __construct($dia, $mes, $ano){
    //    $this->dia = $dia;
    //    $this->mes = $mes;
    //    $this->ano = $ano;
    // }
    // public function __construct($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo){
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    //     $this->cpf = $cpf;
    //     $this->telefone = $telefone;
    //     $this->endereco = $endereco;
    //     $this->estado_civil = $estado_civil;
    //     $this->sexo = $sexo;
    // }
    // public function __construct($marca, $nome, $categoria, $data_fabricacao, $data_venda){
    //     $this->marca = $marca;
    //     $this->nome = $nome;
    //     $this->categoria = $categoria;
    //     $this->data_fabricacao = $data_fabricacao;
    //     $this->data_venda = $data_venda;
    // }

    //Métodos
    public function exibir($marca, $modelo, $cilindrada, $ano, $bateu)
    {
        $bateu ? $bateu = "já" : $bateu = "NÃO"; //conversão -> Bln. To Str.
        echo "A motocicleta $marca $modelo, tem $cilindrada cilindradas, foi fabricada em $ano e $bateu foi batida.";

        $bateu = "NÃO" ? $bateu = false : $bateu = true; //conversão -> Str. To Bln.
    }
}

//Objetos (without __construct)
$moto1 = new Moto();
$moto1->marca = "Yamaha";
$moto1->modelo = "Fazer (FZ25)";
$moto1->cilindrada = 249;
$moto1->ano = 2017;
$moto1->bateu = false;

$moto2 = new Moto();
$moto2->marca = "Honda";
$moto2->modelo = "CB 300F Twister";
$moto2->cilindrada = 293;
$moto2->ano = 2023;
$moto2->bateu = true;

$moto3 = new Moto();
$moto3->marca = "Kawasaki";
$moto3->modelo = "Ninja 400";
$moto3->cilindrada = 399;
$moto3->ano = 2024;
$moto3->bateu = false;
