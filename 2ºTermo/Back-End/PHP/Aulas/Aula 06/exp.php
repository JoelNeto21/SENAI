<?php
    class Moto {
        public $marca;
        public $modelo;
        public $cilindrada;
        public $ano;
        public $bateu;

        public function exibir($marca, $modelo, $cilindrada, $ano, $bateu){
            echo "A motocicleta $marca $modelo, tem $cilindrada cilindradas, foi fabricada em $ano e já foi batida: $bateu";
        }
    }