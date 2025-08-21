//Algoritmo para vacinação para COVID-19 acima de 60 anos

function vacinacao(idade) {
    return idade >= 60;
}

console.log(vacinacao(50)); // false
console.log(vacinacao(70)); // true