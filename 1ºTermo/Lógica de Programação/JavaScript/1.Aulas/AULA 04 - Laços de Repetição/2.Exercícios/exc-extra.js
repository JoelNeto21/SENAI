// Imprimir números pares de 1 a 20

for (let i = 12; i <= 100; i++) {
    if (i % 2 === 0) {
        console.log(i);
    }
}

// Calcular o fatorial de um número fornecido pelo usuário

let numero = 5;

numero = Number(numero);

let fatorial = 1;
for (let i = 1; i <= numero; i++) {
    fatorial *= i;
}
console.log(`O fatorial de ${numero} é ${fatorial}.`);

// Iterar sobre um array: 

let frutas = ["maçã", "banana", "laranja"];
for (let i = 0; i < frutas.length; i++) {
  console.log(frutas[i]);
}

// Iterar valores de outro tema:

let toystory = ['Woody', 'Buzz', 'Jessy', 'Rex', 'Betty'];
for (let i = 0; i < toystory.length; i++) {
    console.log(toystory[i]);
}

// Calcular a soma de números:

let soma = 0;
for (let i = 1; i <= 10; i++) {
  soma += i;
}
console.log(soma);
