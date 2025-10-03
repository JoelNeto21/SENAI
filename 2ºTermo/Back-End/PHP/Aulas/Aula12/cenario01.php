<?php

// Cenário 1 – Viagem pelo Mundo
/* Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da Terra, eles poderão comer comidas típicas e nadar em rios ou praias. */

//  Substantivos: grupo; turista; japao; brasil; acre; lugar; terra; comidaTipica; rio; praia;
//  Verbos: visitar; comer; nadar;

//  Classes: turista; lugar;
//  Metodos: visitar; comer; nadar;

/*
    Turista
        - visitar()
        - comer()
        - nadar()
    Lugar
        - addComida()
*/

//_____________________________________________

// Class
class Turista{
    // Attributes
    // ...

    // Method
    public function visitar(){
        // ...
    }

    public function comer(){
        // ...
    }

    public function nadar(){
        // ...
    }
}

// Class
class Localidade{
    // Attributes
    // ...

    // Method
    public function informarAtividades(){
        // ...
    }
}


// Class
class Atividade{
    // Attributes
    // ...

    // Method
    public function executar(){
        // ...
    }
}


// Class
class Comida{
    // Attributes
    // ...

    // Method
    public function getDescricao(){
        // ...
    }
}


// Class
class CorpoDagua{
    // Attributes
    // ...

    // Method
    public function getTipo(){
        // ...
    }
}
