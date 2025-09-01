<?php

class Carro_ {
    private $marca;
    private $modelo;

    public function setMarca($marca){
        $this->marca = ucwords(strtolower($marca));
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setModelo($modelo){
        $this->modelo = ucwords(strtolower($modelo));
    }

    public function getModelo(){
        return $this->modelo;
    }
    
}

$carro1 = new Carro_();
$carro1->setMarca("Fiat");
$carro1->setModelo("Fastback");
echo "\n1) CARRO-01\n| Marca: {$carro1->getMarca()}\n| Modelo: {$carro1->getModelo()}\n\n";


// --------------------------------------------------------


class Pessoa_ {
    private $nome;
    private $idade;
    private $email;

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade){
        $idade >= 0 ? $this->idade = $idade : $this->idade = '?';
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setEmail($email){
        $this->email = strtolower($email);
    }

    public function getEmail(){
        return $this->email;
    }
    
}

$pessoa1 = new Pessoa_();
$pessoa1->setNome("jOeL nETo");
$pessoa1->setIdade(-17);
$pessoa1->setEmail("JoElNeTo5@gmail");
echo "\n2) PESSOA-01\n| O nome é {$pessoa1->getNome()}, tem {$pessoa1->getIdade()} anos e o email é {$pessoa1->getEmail()}\n\n";


// --------------------------------------------------------


class Aluno_ {
    private $nome;
    private $nota; 

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNota($nota){
        $nota >= 0 && $nota <= 10 ? $this->nota = $nota : $this->nota = 0;
    }

    public function getNota(){
        return $this->nota;
    }
    
}

$aluno1 = new Aluno_();
$aluno1->setNome("jOeL nETo");
//$aluno1->setNota(-5); // Inválida
//$aluno1->setNota(12); // Inválida
$aluno1->setNota(7.5); // Válida
echo "\n3) ALUNO-01\n| Nome: {$aluno1->getNome()}\n| Nota: {$aluno1->getNota()}\n\n";


// --------------------------------------------------------


class Produto_ {
    private $nome;
    private $preco; 
    private $estoque;

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setPreco($preco){
        $preco > 0 ? $this->preco = number_format($preco, 2, ',', '.') : $this->preco = '????';
    }

    public function getPreco(){
        return $this->preco;
    }
    
        public function setEstoque($estoque){
        $estoque >= 0 ? $this->estoque = $estoque : $this->estoque = 0;
    }

    public function getEstoque(){
        return $this->estoque;
    }
}

$produto1 = new Produto_();
$produto1->setNome("coCA-CoLa (600ml)");
$produto1->setPreco(5.90);
$produto1->setEstoque(507);
echo "\n4) PRODUTO-01\n| O produto {$produto1->getNome()} custa R$ {$produto1->getPreco()} e possui {$produto1->getEstoque()} unidades em estoque\n\n";


// --------------------------------------------------------



class Funcionario_ {
    private $nome;
    private $salario; 

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSalario($salario){
               $salario > 0 ? $this->salario = number_format($salario, 2, ',', '.') : $this->salario = '?';
    }

    public function getSalario(){
        return $this->salario;
    }
    
}

$funcionario1 = new Funcionario_();
$funcionario1->setNome("jOeL nETo");
$funcionario1->setSalario(25000); 
echo "\n5) FUNCIONARIO-01\n| Nome: {$funcionario1->getNome()}\n| Salário: {$funcionario1->getSalario()}\n";
$funcionario1->setNome("JOãO ArAUjO");
$funcionario1->setSalario(2500); 
echo ">>>> MODIFICADO >>>>\n| Nome: {$funcionario1->getNome()}\n| Salário: {$funcionario1->getSalario()}\n\n";