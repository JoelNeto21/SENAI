<?php
    function exibirCarro($modelo, $marca, $ano, $revisao, $nDonos) {
        $revisao == true ? $revisao = "Sim" : $revisao = "Não";
        echo "\n1)\tO carro $marca $modelo, ano $ano, já passou por revisão: $revisao, número de donos: $nDonos";
    }

    function ehSeminovo($ano){
        $uso = date("Y") - $ano; 
        return ($uso <= 3) ? true : false;
    }

    function precisaRevisao($revisao, $ano){
        return ($revisao == false && $ano < 2022) ? "Precisa de revisão" : "Revisão em dia";
    }    

    function calcularValor($marca, $ano, $nDonos){
        $preco = 0;

        if ($marca == "BMW" || $marca == "Fiat"){
            $preco = 300000;
        }
        elseif ($marca == "Volkswagen"){
            $preco = 70000;
        }
        elseif ($marca == "Honda"){
            $preco = 150000;
        } else {
            $preco = 0;
        }

        $preco -= $preco * (($nDonos-1) * 0.05);
        $preco -= (date("Y") - $ano) * 3000;

        $precoF = number_format($preco, 2, ',', '.');

        return $precoF;
    }  

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

    echo "\n#Carro 1";

    exibirCarro($modelo_carro1, $marca_carro1, $ano_carro1, $revisao_carro1, $nDonos_carro1);
    echo (ehSeminovo($ano_carro1) == true) ? "\n2)\tSeminovo" : "\n2)\tUsado";
    echo "\n3)\t" . precisaRevisao($revisao_carro1, $ano_carro1);
    echo "\n4)\tR$" . calcularValor($marca_carro1, $ano_carro1, $nDonos_carro1);

    echo "\n\n#Carro 2";

    exibirCarro($modelo_carro2, $marca_carro2, $ano_carro2, $revisao_carro2, $nDonos_carro2);
    echo (ehSeminovo($ano_carro2) == true) ? "\n2)\tSeminovo" : "\n2)\tUsado";
    echo "\n3)\t" . precisaRevisao($revisao_carro2, $ano_carro2);
    echo "\n4)\tR$" . calcularValor($marca_carro2, $ano_carro2, $nDonos_carro2);

    echo "\n\n#Carro 3";

    exibirCarro($modelo_carro3, $marca_carro3, $ano_carro3, $revisao_carro3, $nDonos_carro3);
    echo (ehSeminovo($ano_carro3) == true) ? "\n2)\tSeminovo" : "\n2)\tUsado";
    echo "\n3)\t" . precisaRevisao($revisao_carro3, $ano_carro3);
    echo "\n4)\tR$" . calcularValor($marca_carro3, $ano_carro3, $nDonos_carro3);

    echo "\n\n#Carro 4";

    exibirCarro($modelo_carro4, $marca_carro4, $ano_carro4, $revisao_carro4, $nDonos_carro4);
    echo (ehSeminovo($ano_carro4) == true) ? "\n2)\tSeminovo" : "\n2)\tUsado";
    echo "\n3)\t" . precisaRevisao($revisao_carro4, $ano_carro4);
    echo "\n4)\tR$" . calcularValor($marca_carro4, $ano_carro4, $nDonos_carro4);
    
    echo "\n\n";
