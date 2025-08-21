// 1. Verificação de Maioridade e Habilitação
// Escreva um programa que verifique se uma pessoa é maior de idade e
// possui habilitação para dirigir.

let idade = parseInt(prompt("Digite a idade:"));
let habilitacao = prompt("Possui habilitação? (S/N)").toUpperCase();
lowerCase();

if (idade >= 18 && habilitacao === "S" && habilitacao === "s") {
    alert("Pode dirigir.");
    } else {
    alert("Não pode dirigir.");
    }

    