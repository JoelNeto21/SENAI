<?php

//@Parent
class Animal_{
    private $especie;
    private $habitat;
    private $sexo;
    private $alimentacao;

    public function __construct($especie, $habitat, $sexo, $alimentacao){
        $this->setEspecie($especie);
        $this->setHabitat($habitat);
        $this->setSexo($sexo);
        $this->setAlimentacao($alimentacao);
    }

    //Espécie
    public function setEspecie($especie){
        $this->especie = $especie;
    }
    public function getEspecie(){
        return $this->especie;
    }
    //Habitat
    public function setHabitat($habitat){
        $this->habitat = $habitat;
    }
    public function getHabitat(){
        return $this->habitat;
    }
    //Sexo
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getSexo(){
        return $this->sexo;
    }
    //Alimentação
    public function setAlimentacao($alimentacao){
        $this->alimentacao = $alimentacao;
    }
    public function getAlimentacao(){
        return $this->alimentacao;
    }
    
}

//@Child 
class Cachorro_ extends Animal_{
    private $raca;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $raca){
        parent::__construct($especie, $habitat, $sexo, $alimentacao);
        $this->setRaca($raca);
    }

    public function setRaca($raca){
        $this->raca = $raca;
    }
    public function getRaca(){
        return $this->raca;
    } 
}

//@Child
class Pangolim_ extends Animal_{
    private $N_escamas;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $N_escamas) {
        parent::__construct($especie, $habitat, $sexo, $alimentacao);
        $this->N_escamas = $N_escamas;
    }

    public function setN_escamas($N_escamas){
        $this->N_escamas = $N_escamas;
    }
    public function getN_escamas(){
        return $this->N_escamas;
    }
}

//@Child
class Macaco_ extends Animal_{
    private $tempoDormindo;
    private $qtd_bananas_dia;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $tempoDormindo, $qtd_bananas_dia){
        parent::__construct($especie, $habitat, $sexo, $alimentacao);
        $this->qtd_bananas_dia = $qtd_bananas_dia;
        $this->tempoDormindo = $tempoDormindo;
    }

    public function setTempoDormindo($tempoDormindo){
        $this->tempoDormindo = $tempoDormindo;
    }
    public function getTempoDormindo(){
        return $this->qtd_bananas_dia;
    }

    public function setQtd_bananas_dia($qtd_bananas_dia){
        $this->qtd_bananas_dia = $qtd_bananas_dia;
    }
    public function getQtd_bananas_dia(){
        return $this->qtd_bananas_dia;
    }
}

//@Child
class Gato_ extends Animal_{
    private $tipo_ronronamento;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $tipo_ronronamento){
        parent::__construct($especie, $habitat, $sexo, $alimentacao);
        $this->tipo_ronronamento = $tipo_ronronamento;
    }

    public function setTipo_ronamento($tipo_ronronamento){
        $this->tipo_ronronamento = $tipo_ronronamento;
    }
    public function getTipo_ronamento(){
        return $this->tipo_ronronamento;
    }
}
