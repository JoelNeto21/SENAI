<?php

// Cenário 5 – Analise o problema com linguagem natural
/* Um sistema de biblioteca deve permitir que usuários (alunos e professores) façam empréstimos de livros e revistas. */

//  Substantivos: sistema; biblioteca; usuario; aluno; professor; livro; revista; emprestimo;
//  Verbos: dever; permitir; fazer; emprestar;

//  Classes: usuario; (aluno - professor) item; (livro - revista)
//  Metodos: emprestimo;

/*
    Usuario
        - emprestimo()
            Aluno
                - emprestimo()
            Professor
                - emprestimo()
    Item
        Livro
        Revista
*/