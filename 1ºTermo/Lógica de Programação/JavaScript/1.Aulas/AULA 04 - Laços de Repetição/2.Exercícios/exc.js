// ### Exercícios com Laço `for`

// #### Exercício 1: Imprimir Números de 1 a 50
// Escreva um programa que imprima todos os números de 1 a 50.

for (let i = 1; i <= 50; i++) {
    console.log(i);
}

// #### Exercício 2: Tabuada de um Número
// Escreva um programa que peça ao usuário um número e imprima a tabuada desse número de 1 a 10.

const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question('Digite um número: ', (numero) => {
    numero = Number(numero);

    for (let i = 1; i <= 10; i++) {
        console.log(`${numero} x ${i} = ${numero * i}`);
    }

    rl.close();
});

// #### Exercício 3: Soma dos Números Ímpares
// Escreva um programa que calcule a soma de todos os números ímpares de 1 a 100.

let soma = 0;
for (let i = 1; i <= 100; i++) {
    if (i % 2 !== 0) {
        soma += i;
    }
}
console.log(soma);

// ### Exercícios com Laço `while`

// #### Exercício 4: Contagem Regressiva
// Escreva um programa que faça uma contagem regressiva de 10 a 1 e imprima "Feliz Ano Novo!" ao final.

let i = 10;
while (i > 0) {
    console.log(i);
    i--;
}
console.log("Feliz Ano Novo!");

// #### Exercício 5: Adivinhe o Número
// Escreva um programa que peça ao usuário para adivinhar um número entre 1 e 10 até que ele acerte.

const readline2 = require('readline');

const rl2 = readline2.createInterface({
    input: process.stdin,
    output: process.stdout
});

const numeroSecreto = 7;
let chute;

const perguntar = () => {
    rl2.question('Adivinhe o número (1 a 10): ', (resposta) => {
        chute = Number(resposta);
        if (chute === numeroSecreto) {
            console.log("Parabéns! Você acertou.");
            rl2.close();
        } else {
            console.log("Tente novamente.");
            perguntar();
        }
    });
};

perguntar();

// #### Exercício 6: Soma de Números Positivos
// Escreva um programa que peça ao usuário para inserir números positivos e calcule a soma desses números. O programa deve parar quando o usuário inserir um número negativo.

const readline3 = require('readline');

const rl3 = readline3.createInterface({
    input: process.stdin,
    output: process.stdout
});

let soma2 = 0;
let numero2;

const perguntar2 = () => {
    rl3.question('Digite um número (negativo para sair): ', (resposta) => {
        numero2 = Number(resposta);
        if (numero2 >= 0) {
            soma2 += numero2;
            perguntar2();
        } else {
            console.log(`A soma dos números positivos é: ${soma2}`);
            rl3.close();
        }
    });
};

perguntar2();

// ### Exercícios com Laço `do...while`

// #### Exercício 7: Menu de Opções
// Escreva um programa que apresente um menu de opções ao usuário e continue exibindo o menu até que o usuário escolha a opção de sair.

const readline4 = require('readline');

const rl4 = readline4.createInterface({
    input: process.stdin,
    output: process.stdout
});

let opcao;

const mostrarMenu = () => {
    console.log("Menu de Opções:");
    console.log("1. Opção 1");
    console.log("2. Opção 2");
    console.log("3. Sair");
};

const perguntar3 = () => {
    mostrarMenu();
    rl4.question('Escolha uma opção: ', (resposta) => {
        opcao = Number(resposta);
        if (opcao === 3) {
            console.log("Programa encerrado.");
            rl4.close();
        } else {
            console.log(`Você escolheu a opção ${opcao}.`);
            perguntar3();
        }
    });
};

perguntar3();

// #### Exercício 8: Validação de Entrada
// Escreva um programa que peça ao usuário para inserir um número entre 1 e 10 e continue pedindo até que o usuário insira um número válido.

const readline5 = require('readline');

const rl5 = readline5.createInterface({
    input: process.stdin,
    output: process.stdout
});

let numero3;

const perguntar4 = () => {
    rl5.question('Digite um número entre 1 e 10: ', (resposta) => {
        numero3 = Number(resposta);
        if (numero3 >= 1 && numero3 <= 10) {
            console.log(`Você digitou um número válido: ${numero3}`);
            rl5.close();
        } else {
            perguntar4();
        }
    });
};

perguntar4();
