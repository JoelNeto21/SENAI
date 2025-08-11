<?php
    // 1. Verificação de Idade
    echo "#Ex.01\n";
    $idade = 17;

    if ($idade >= 18) {
        echo "Maior de Idade";
    } else {
        echo "Menor de Idade";
    }

    // 2. Classificação de Nota
    echo "\n\n#Ex.02\n";
    $nota = 7;

    if ($nota >= 9){
        echo "Excelente";
    } elseif ($nota >= 7){
        echo "Bom";
    } else {
        echo "Reprovado";
    }
    
    // 3. Dia da Semana
    echo "\n\n#Ex.03\n";
    $dia = 2;

    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
            break;
        case 3:
            echo "Terça";
            break;
        case 4:
            echo "Quarta";
            break;
        case 5:
            echo "Quinta";
            break;
        case 6:
            echo "Sexta";
            break;
        case 7:
            echo "Sábado";
            break;                                                        
        default:
            echo "--- [ERRO] Valor inválido! Digite apenas valores entre 1-7.";
            break;
    }
    
    // 4. Calculadora Simples
    echo "\n\n#Ex.04\n";
    $num1 = 3;
    $num2 = 5;
    $operador = '*';
    $result;

    switch ($operador) {
        case '+':
            $result = $num1 + $num2;
            echo "$num1 $operador $num2 = $result";
            break;
        case '-':
            $result = $num1 - $num2;
            echo "$num1 $operador $num2 = $result";
            break;
        case '*':
            $result = $num1 * $num2;
            echo "$num1 $operador $num2 = $result";
            break;
        case '/':
            $result = $num1 / $num2;
            echo "$num1 $operador $num2 = $result";
            break;
        default:
            echo "--- [ERRO] Valor inválido!";
            break;
    }
    
    // 5. Contagem Progressiva
    echo "\n\n#Ex.05\n";
    for ($i = 1; $i <= 10; $i++){
        echo "$i\n";
    }
    
    // 6. Contagem Regressiva
    echo "\n#Ex.06\n";
    $init = 10;
    // $init = readline("Digite o valor inicial da contagem regressiva: ");
    for ($init = 10; $init >= 1; $init--){
        echo "$init\n";
    }
    
    // 7. Números Pares
    echo "\n#Ex.07\n";
    $nPar = 10;
    // $nPar = readline("Números pares de 0 a: ");
    for ($i = 0; $i <= $nPar; $i+=2){
        echo "$i\n";
    }
    
    // 8. Tabuada
    echo "\n#Ex.08";
    $nTab = 7;
    // $nTab = readline("Tabuada do número: ");
    for ($i = 0; $i <= $nTab; $i++){
        $resTab = $nTab * $i;
        echo "\n$nTab x $i = $resTab";
    }
    
    // 9. Classificação de Temperatura
    echo "\n\n#Ex.09\n";
    $temp = 23;

    if ($temp < 15){
        echo "Frio";
    } elseif ($temp <= 25){
        echo "Agradável";
    } else {
        echo "Quente";
    }
    
    // 10. Menu Interativo
    echo "\n\n#Ex.10\n";
    for ($i = 0; $i < 5; $i++){
        echo "MENU INTERATIVO\n1 - Olá\n2 - Data Atual\n3 - Sair\n";
        $option = 3;
        // $option = readline("Escolha uma opção:");
        switch ($option) {
            case 1:
                echo "Olá!";
                break;
            case 2:
                echo date('d/m/Y');
                break;
            case 3:
                echo "Tchau!";
                break;
            default:
                "--- [ERRO] Opção inválida! Digite apenas um valor entre 1-3.";
                break;
        }
        if ($option == 3){
            break;
        }
    }