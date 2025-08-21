//Operadores Lógicos - Exercícios de fixação

//01
function dirigir(idade, habilitacao) {
    return idade >= 18 && habilitacao;
}

console.log("\n");

console.log(dirigir(18, false)); // Não pode dirigir
console.log(dirigir(70, false)); // Pode dirigir


//02
console.log("\n");

let a = true;
let b = true;

console.log(a || b); // true
console.log(a || false); // true

console.log("\n"); 


//03
function fimdesemana(dia) {
    return dia == "Sabado" || dia == "Domingo";
}

console.log(fimdesemana("Sabado")); // true
console.log(fimdesemana("Domingo")); // true


//04
function naoAdulto(idade) {
    return !(idade >= 18);
}

console.log(naoAdulto(20)); // false
console.log(naoAdulto(16)); // true
