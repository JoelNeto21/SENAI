<?php
    class Cachorro
    {
        public $nome;
        public $idade;
        public $raca;
        public $castracao;
        public $sexo;

        public function __construct($nome, $idade, $raca, $castracao, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->raca = $raca;
            $this->castracao = $castracao;
            $this->sexo = $sexo;
        }
    }

    $cachorro1 = new Cachorro("Thor", 5, "Pastor Alemão", true, 'M');
    $cachorro2 = new Cachorro("Lola", 2, "Golden Retriever", false, 'F');
    $cachorro3 = new Cachorro("Buddy", 8, "Vira-lata", true, 'M');
    $cachorro4 = new Cachorro("Mia", 3, "Poodle", true, 'F');
    $cachorro5 = new Cachorro("Zeus", 6, "Husky Siberiano", false, 'M');
    $cachorro6 = new Cachorro("Luna", 1, "Labrador", false, 'F');
    $cachorro7 = new Cachorro("Max", 4, "Boxer", true, 'M');
    $cachorro8 = new Cachorro("Bella", 7, "Shih Tzu", true, 'F');
    $cachorro9 = new Cachorro("Rocky", 9, "Bulldog", false, 'M');
    $cachorro10 = new Cachorro("Maggie", 3, "Border Collie", true, 'F');

    //-----------------------------------------------------------------

    class Usuario
    {
        public $nome;
        public $cpf;
        public $sexo;
        public $email;
        public $estadoCivil;
        public $cidade;
        public $estado;
        public $endereco;
        public $cep;

        public function __construct($nome, $cpf, $sexo, $email, $estadoCivil, $cidade, $estado, $endereco, $cep)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->sexo = $sexo;
            $this->email = $email;
            $this->estadoCivil = $estadoCivil;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->endereco = $endereco;
            $this->cep = $cep;
        }
    }

    $usuario1 = new Usuario(
        "Josenildo Afonso Souza", 
        "100.200.300-40", 
        'M', 
        "josenewdo.souza@gmail.com", 
        "Casado", 
        "Xique-Xique", 
        "Bahia", 
        "Rua da amizade, 99", 
        "40123-98"
    );

    $usuario2 = new Usuario(
        "Valentina Passos Scherrer", 
        "070.070.060-70", 
        'F', 
        "scherrer.valen@outlook.com", 
        "Divorciada", 
        "Iracemápolis", 
        "São Paulo", 
        "Avenida da saudade, 1942", 
        "23456-24"
    );

    $usuario3 = new Usuario(
        "Claudio Braz Nepumoceno", 
        "575.575.242-32", 
        'M', 
        "clauclau.nepumoceno@gmail.com", 
        "Solteiro", 
        "Piripiri", 
        "Piauí", 
        "Estrada 3, 33", 
        "12345-99"
    );
