<?php
    // echo "Hello World!"
    class Carro{ 
        public $marca;
        public $modelo;
        public $ano;
        public $revisao;
        public $nDonos;
    
        public function __construct($marca, $modelo, $ano, $revisao, $nDonos) {
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> ano = $ano;
            $this -> revisao = $revisao;
            $this -> nDonos = $nDonos;
        }
    }

    $carro1 = new Carro("Porche", "911", 2020, false, 3);
    $carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1);

    $carro3 = new Carro("Honda", "Civic", 2024, false, 2);
    $carro4 = new Carro("Ford", "Mustang", 1969, true, 3);
    $carro5 = new Carro("Chevrolet", "Camaro", 2023, false, 4);
    $carro6 = new Carro("Toyota", "Corolla", 2022, false, 5);
