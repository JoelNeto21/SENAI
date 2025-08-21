console.log("\n-------------------\n");

// Dsf1 - imprimir 11 vezes a palavra "Hello World!"
for (let i = 1; i <= 11; i++) {
    console.log(`${i} - Hello World!`);
}

console.log("\n-------------------\n");

// Dsf2 - tabuada 
let num = 7;
for (let i = 1; i <= 10; i++) {
    console.log(`${num} x ${i} = ${num * i}`);
}

console.log("\n-------------------\n");

// Dsf3 - imprimir a soma dos numeros impares de 1 a 100
let soma = 0;
for (let i = 1; i <= 100; i++) {
    if (i % 2 !== 0) {
        console.log(i);
        soma += i;
    }
}
console.log(`SOMA = ${soma}`);

console.log("\n-------------------\n");

// Dsf4 - contagem regressiva para ano novo
for (let i = 10; i >= 0; i--) {
    console.log(i);
  }
  console.log("Feliz Ano Novo!");

console.log("\n-------------------\n");
