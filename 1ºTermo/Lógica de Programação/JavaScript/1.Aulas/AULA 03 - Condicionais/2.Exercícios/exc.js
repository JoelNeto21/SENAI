//Exercícios de Condicionais

/*### 01: Verificação de Categoria de Idade
Escreva um programa que classifique a idade de uma pessoa em categorias
(criança, adolescente, adulto, idoso) e imprima uma mensagem apropriada.*/

let idade = 20;
if (idade < 13){
    console.log('Criança')
} else if (idade < 18){
    console.log('Adolescente')
} else if (idade < 60){
    console.log('Adulto')
} else {
    console.log('Idoso')
}

console.log("\n-------------------\n");

/*### 02: Verificação de Nota com Mensagem
Escreva um programa que verifique a nota de um aluno e imprima uma mensagem
personalizada com base na nota.*/

let nota = 70;
if (nota < 50){
    console.log('Reprovado')
} else if (nota < 70){
    console.log('Recuperação')
} else {
    console.log('Aprovado')
}

console.log("\n-------------------\n");

/*### 03: Verificação de Dia da Semana
Escreva um programa que verifique o dia da semana e imprima uma mensagem
apropriada. (Deixar o mais curto possível)*/

let dia = 'segunda';
if (dia === 'domingo'){
    console.log('Vou a praia')
} else if (dia === 'segunda'){  
    console.log('Vou trabalhar')
} else if (dia === 'terça'){
    console.log('Vou estudar')
} else if (dia === 'quarta'){
    console.log('Vou ao cinema')
} else if (dia === 'quinta'){
    console.log('Vou ao teatro')
} else if (dia === 'sexta'){
    console.log('Vou ao shopping')
} else if (dia === 'sábado'){
    console.log('Vou ficar em casa')
} else {
    console.log('[ERRO] Dia inválido!')
}

console.log("\n-------------------\n");

/*### 04: Verificação de Horário do Dia
Escreva um programa que verifique a hora do dia e imprima uma mensagem
apropriada (manhã, tarde, noite).*/

let hora = new Date().getHours();
if (hora < 12){
    console.log('Bom dia!')
} else if (hora < 18){
    console.log('Boa tarde!')
} else {
    console.log('Boa noite!')
}

console.log("\n-------------------\n");

/*### 05: Verificação de Peso Ideal
Escreva um programa que verifique se uma pessoa está abaixo, dentro ou acima
do peso ideal com base no IMC (Índice de Massa Corporal).*/

let peso = 57;
let altura = 1.67;
let imc = peso / (altura * altura);

if (imc < 18.5){
    console.log(`IMC = ${imc.toFixed(1)} (Abaixo do peso)`)
} else if (imc < 24.9){
    console.log(`IMC = ${imc.toFixed(1)} (Peso normal)`)
} else if (imc < 29.9){
    console.log(`IMC = ${imc.toFixed(1)} (Sobrepeso)`)
} else if (imc < 34.9){
    console.log(`IMC = ${imc.toFixed(1)} (Obesidade grau I)`)
} else if (imc < 39.9){
    console.log(`IMC = ${imc.toFixed(1)} (Obesidade grau II)`)
} else {
    console.log(`IMC = ${imc.toFixed(1)} (Obesidade grau III)`)
}

console.log("\n-------------------\n");

/*### 06: Verificação de Número Primo
Escreva um programa que verifique se um número é primo.*/

let numero = 7;
let primo = true;
for (let i = 2; i < numero; i++){
    if (numero % i === 0){
        primo = false;
        break;
    }
} 
console.log(primo ? 'É primo' : 'Não é primo')

console.log("\n-------------------\n");

/*### 07: Verificação de Ano Bissexto
Escreva um programa que verifique se um ano é bissexto.*/


let ano = 2024;
if (ano % 4 === 0 && (ano % 100 !== 0 || ano % 400 === 0)){
    console.log('Ano bissexto')
} else {
    console.log('Ano não bissexto')
}

console.log("\n-------------------\n");

/*### 08: Verificação de Nota com Mensagem Personalizada
Escreva um programa que verifique a nota de um aluno e imprima uma mensagem
personalizada com base na nota.*/

let nt = 50;
if (nt >= 90){
    console.log('Excelente')
} else if (nt >= 80){
    console.log('Bom')
} else if (nt >= 70){
    console.log('Regular')
} else if (nt >= 60){
    console.log('Foi por pouco')
} else if (nt >= 50){
    console.log('Por um fio')
} else{
    console.log('Você precisa estudar')
}

console.log("\n-------------------\n");

/*### 09: Verificação de Temperatura com Mensagem
Escreva um programa que verifique a temperatura e imprima uma mensagem
apropriada.*/

let temperatura = 40;
if (temperatura < 20) {
    console.log('Frio');
}
else if (temperatura < 30) {
    console.log('Agradável');
}
else {
    console.log('Calor');
}

console.log("\n-------------------\n");

/*### 010: Verificação de Desempenho de Vendas
Escreva um programa que verifique o desempenho de vendas de um vendedor e
imprima uma mensagem apropriada.*/

let vendas = 20000.00;
if (vendas < 5000){
    console.log('Desempenho ruim!')
} else if (vendas < 10000){
    console.log('Desempenho regular!')
} else if (vendas < 15000){
    console.log('Bom desempenho!')
} else {
    console.log('Desempenho excelente!\nGanhou aumento!!')
}

console.log("\n-------------------\n");
