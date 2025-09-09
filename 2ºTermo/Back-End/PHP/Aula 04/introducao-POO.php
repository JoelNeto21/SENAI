<?php
    // Modelagem de dados sem a utilização de POO (Programação Orientada a Objetos)
    $marca_carro1 = "Honda";
    $modelo_carro1 = "Civic";
    $ano_carro1 = 2016;
    $revisao_carro1 = true;
    $nDonos_carro1 = 2;
    
    $marca_carro2 = "BMW";
    $modelo_carro2 = "320i";
    $ano_carro2 = 2012;
    $revisao_carro2 = false;
    $nDonos_carro2 = 3;

    $marca_carro3 = "Fiat";
    $modelo_carro3 = "Uno";
    $ano_carro3 = 2005;
    $revisao_carro3 = false;
    $nDonos_carro3 = 1;

    $marca_carro4 = "Volkswagen";
    $modelo_carro4 = "Jetta";
    $ano_carro4 = 2020;
    $revisao_carro4 = true;
    $nDonos_carro4 = 7;

    function revisaoFeita($rev){
        $rev = true;
        return $rev;
    }
    $revisao_carro3 = revisaoFeita($revisao_carro3); // Resultado true

    function novoDono($qtdDonos){
        return $qtdDonos++;
    }
    $nDonos_carro4 = revisaoFeita($nDonos_carro4);
    