//Condicionais (IF.../ELSE...)

//Número
let num = 7;
if (num === 1) {
    console.log("\nnum é IGUAL a 1");
}
else {
    console.log("\nnum é DIFERENTE de 1");
}

//Idade
let idade = 20;
if (idade >= 18) {
    console.log("\nVocê é MAIOR de idade");
}
else {
    console.log("\nVocê é MENOR de idade");
}

//Vacina
let vacina = 57;
if (vacina >= 60) {
    console.log("\nVocê PODE vacinar");
}
else {
    console.log("\nVocê NÃO pode vacinar");
}

//Dia
let dia = "segunda";
if (dia === "domingo") {
    console.log("\nVou a praia");
}
else {
    console.log("\nFico em casa");
}

//Hora do dia
let hora = 8;
if (hora < 12) {
    console.log("\nBom dia!");
}
else if (hora < 18) {
    console.log("\nBoa tarde!");
} 
else {
    console.log("\nBoa noite!");
}

//Temperatura
let temperatura = 30;
if (temperatura < 20) {
    console.log("\nFrio");
}
else if (temperatura < 30) {
    console.log("\nAgradável");
}
else {
    console.log("\nCalor");
}

console.log("\n"); //Pular linha