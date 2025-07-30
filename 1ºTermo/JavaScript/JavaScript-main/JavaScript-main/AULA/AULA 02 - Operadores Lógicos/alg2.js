/*

function dirigir(idade, habilitacao) {
    return idade >= 18 && habilitacao;
}

console.log("\n");

console.log(dirigir(18, false)); // Não pode dirigir
console.log(dirigir(70, false)); // Pode dirigir

*/

// --- Exercícios de fixação ---

/*

console.log("\n");

let a = true;
let b = true;

console.log(a || b); // true
console.log(a || false); // true

console.log("\n"); 

*/

// --- Exercícios de fixação ---

/*

function fimdesemana(dia) {
    return dia == "Sabado" || dia == "Domingo";
}

console.log(fimdesemana("Sabado")); // true
console.log(fimdesemana("Domingo")); // true

*/

// --- Exercícios de fixação ---

function naoAdulto(idade) {
    return !(idade >= 18);
}

console.log(naoAdulto(20)); // false
console.log(naoAdulto(16)); // true