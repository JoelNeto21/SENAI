<?php

// Cenário 6 – Leia o enunciado do problema
/* Um sistema de cinema deve permitir que clientes comprem ingressos para sessões de filmes. */

//  Substantivos: sistema; cinema; cliente; ingresso; sessao; filme;
//  Verbos: dever; permitir; comprar; 

//  Classes: cinema; cliente;
//  Metodos: comprar; 

/*
    Cliente
        - comprar()
*/

//_____________________________________________

// Class
class SistemaDeCinema{
    // Attributes
    // ...

    // Method
    public function exibirSessoes(){
        // ...
    }

    public function venderIngresso(){
        // ...
    }
}


// Class
class Cliente{
    // Attributes
    // ...

    // Method
    public function comprarIngresso(){
        // ...
    }
}


// Class
class Filme{
    // Attributes
    // ...

    // Method
    public function getDetalhes(){
        // ...
    }
}


// Class
class Sessao{
    // Attributes
    // ...

    // Method
    public function reservarAssento(){
        // ...
    }

    public function liberarAssento(){
        // ...
    }
}


// Class
class Ingresso{
    // Attributes
    // ...

    // Method
    public function validar(){
        // ...
    }
}


// Class
class Sala{
    // Attributes
    // ...

    // Method
    public function verificarDisponibilidade(){
        // ...
    }
}