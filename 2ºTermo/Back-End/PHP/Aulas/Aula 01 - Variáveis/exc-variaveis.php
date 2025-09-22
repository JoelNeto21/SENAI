<?php

    echo "Ex.01:\n\n";

    /*  
    1. Crie uma página PHP com duas variáveis $nome e $idade. Atribua a essas
    variáveis o seu nome e a sua idade. Utilize um comando para escrever na tela a
     mensagem:
        “Eu sou NOME e tenho XX anos”.
    */

    $nome = "Joel Neto";
    $idade = "17";
    $ano_atual = "2025";

    $data_nasc = $ano_atual - $idade;

    echo "Olá, $nome!\nVocê nasceu em: $data_nasc";

    echo "\n\nEx.02:\n\n";

    /*  
    2. Dado uma frase “Programação em php.” transformá‐la em maiúscula, imprima,
    depois em minúscula e imprima de novo. 
    */

    $frase = "Progrmação em php.";
    echo $frase, "\n";

    $fraseUp = strtoupper($frase);
    echo $fraseUp, "\n";

    $fraseLow = strtolower($frase);
    echo $fraseLow;

    echo "\n\nEx.03:\n\n";

    /* 
    3. Numa dada frase “O PHP foi criado em mil novecentos e noventa e cinco”.
    - Trocar o “O” (letra) por “0”(zero), o “a” por “4” e o “i” por “1”.
    */

    $frase2 = "O PHP foi criado em mil novecentos e noventa e cinco";
    echo $frase2, "\n";

        # Usando str_ireplace para substituir de forma case-insensitive
    $frase2_replaced = str_ireplace(['o', 'a', 'i'], ['0', '4', '1'], $frase2,);
    // $frase2_replaced = str_ireplace(['o', 'a', 'i'], ['0', '4', '1'], $frase2,);

    echo $frase2_replaced;

    # Alternativamente, também pode ser usado o seguinte código:
    // $text = "O PHP foi criado em mil novecentos e noventa e cinco";
    // $search = array("O", "a", "i");
    // $replace = array("0", "4", "1");
    // $newText = str_replace($search, $replace, $text);

    // echo $newText; // Output: 0 PHP fo1 cr14do em m1l novecentos e noventa e c1nco