<?php
//Classe
class Pessoa
{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    //Construtor
    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setIdade($idade);
        $this->email = $email;
        $this->senha = $senha;
    }

    public function exibirDados()
    {
        return "\nNome do Aluno: " . $this->getNome() . "\nCPF: " . $this->getCpf() . "\nTelefone: " . $this->getTelefone() . "\nIdade: " . $this->getIdade() . "\nEmail: " . $this->email . "\nSenha: " . $this->senha . "\n\n";
    }

    //Getters e Setters
    public function setNome($nome)
    {
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = preg_replace('/\D/', '', $telefone);
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setIdade($idade)
    {
        $this->idade = abs((int)$idade);
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$aluno1 = new Pessoa("jOeL JoãO dE aRAuJo nETo", "123.456.789-00", "(19) 99999-9999", 25, "joelneto5@email.com", "s3nH@12!");
// echo "\n|\tNome: " . $aluno1->getNome() . "\n\n";
echo $aluno1->exibirDados();
