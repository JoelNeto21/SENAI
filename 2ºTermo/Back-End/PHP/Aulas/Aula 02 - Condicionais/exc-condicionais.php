<?php
    echo "Boa tarde!\n";
    // $nome = "Enzo Enrico";
    $nome = readline("Digite o nome do aluno: ");
    $nota1 = readline("Digite a primeira nota: ");
    $nota2 = readline("Digite a segunda nota: ");
    $media = ($nota1 + $nota2) / 2;
    $qtdAulas = readline("Digite a quantidade total de aulas dadas: ");
    $faltas = readline("Digite a quantidade de faltas do aluno: ");
    $presenca = (($qtdAulas - $faltas) / $qtdAulas) * 100; // Porcentagem

    if ($nome == "Enzo Enrico") {
        echo "$nome foi APROVADO ✓";
    } elseif ($media >= 7 && $presenca >= 75) {
        echo "Aluno APROVADO ✓\n# Média = $media\n# Presença = $presenca%";
    } else {
        echo "Aluno REPROVADO ✕\n# Média = $media\n# Presença = $presenca%";
    }