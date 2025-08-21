// Desafio 1
// Criar um algoritmo para separar valores pares e impares

let numero = 11;
if (numero %2 === 0) {
    console.log("O numero é par" )
}
else {
    console.log("o numero é impar")
}

// Desafio 2
// Criar um algoritmo para calcular valores com as expressões soma , subtrair, multiplicar e dividir

// Murilo
let num1 = 10;
let num2 = 20;
let conta = 'subtracao';

if (conta == 'soma') {
    let resul = num1 + num2;
    console.log("Resultado da soma" + resul)
}
else if (conta == 'subtracao') {
    let resul = num1 -  num2;
    console.log("Resultado da subtração" + resul)
}

//Julio
let julio1 = 10;
let julio2 = 20;
let switch1 = 1; //trocar

if (switch1 == 1) {
    console.log("O resultado da soma" + (julio1 + julio2))
}

//Joel
let joel1 = 5;
let operador = '+';
let joel2 = 10;

if (operador == '+') {
    console.log(`\n ${joel1} + ${joel2} = ${joel1+joel2} \n`)
}

//Douglas
let edu1 = 10;
let edu2 = 20;
let soma = edu1 + edu2;

let equacao = 'soma';
if (equacao == 'soma') {
    console.log("A soma foi" + soma)
}

//Hayron
let a = 10;
let b = 5;

let haysoma = a + b;
let haysub = a - b;
let haymult = a * b;
let haydiv = a / b;

console.log("Resultado soma" + haysoma);
console.log("Resultado soma" + haysub);
