<?php

    $nome = "Enzo Enrico";
    $nota1 = 7;
    $nota2 = 5;
        $media = ($nota1 + $nota2) / 2;
    $qtdAulas = 100;
    $faltas = 10;
        $presenca = (($qtdAulas - $faltas) / $qtdAulas) * 100; // Porcentagem

    if ($nome == "Enzo Enrico") {
        echo "$nome foi APROVADO ✓";
    } elseif ($media >= 7 && $presenca >= 75) {
        echo "Aluno APROVADO ✓\n# Média = $media\n# Presença = $presenca%";
    } else {
        echo "Aluno REPROVADO ✕\n# Média = $media\n# Presença = $presenca%";
    }