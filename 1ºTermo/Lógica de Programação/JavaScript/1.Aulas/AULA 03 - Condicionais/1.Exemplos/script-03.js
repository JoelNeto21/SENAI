//Condicionais (IF.../ELSE IF.../ELSE...)

//Nota
let nota = 85;
if (nota >= 80){
    console.log('Parabéns, você foi aprovado(a)!')
}
else if (nota < 80 && nota >= 60){
    console.log('Você foi está na nossa lista de espera')
}
else{
    console.log('Você foi reprovado(a)')
}

//Vacina
let vacina = 85;
if (vacina >= 60){
    console.log('Você PODE vacinar')
}
else if (vacina < 15 && vacina >= 60){
    console.log('Lista de ESPERA')
}
else{
    console.log('Você NÃO pode vacinar')
}

//Notas
let nota1 = 50;
if (nota1 >= 90){
    console.log('Excelente')
}
else if (nota1 >= 80){
    console.log('Bom')
}
else if (nota1 >= 70){
    console.log('Regular')
}
else if (nota1 >= 60){
    console.log('Foi por pouco')
}
else if (nota1 >= 50){
    console.log('Por um fio')
}
else{
    console.log('Você precisa estudar')
}

//Hora do dia
let hora = 20;
if (hora < 12) {
    console.log("\nBom dia!");
}
else if (hora < 18) {
    console.log("\nBoa tarde!");
} 
else {
    console.log("\nBoa noite!");
}

//Dia
let dia = "quinta";
if (dia === "domingo") {
    console.log("\nVou a praia");
}
else if (dia === "segunda") {
    console.log("\nVejo meus avós");
}
else if (dia === "terça") {
    console.log("\nJogo bola");
}
else if (dia === "quarta") {
    console.log("\nVou a igreja");
}
else if (dia === "quinta") {
    console.log("\nAprendo programação");
}
else if (dia === "sexta") {
    console.log("\nComo pizza");
}
else if (dia === "sábado") {
    console.log("\nFico em casa");
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