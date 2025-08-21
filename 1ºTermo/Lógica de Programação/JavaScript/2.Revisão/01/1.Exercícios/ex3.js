// 3. Verificação de Votação
// Escreva um programa que verifique se uma pessoa pode votar com base na
// sua idade e nacionalidade.

let idade = parseInt(prompt("Digite a idade:"));
let nacionalidade = prompt("Digite a nacionalidade:").toUpperCase();

if (idade >= 16 && nacionalidade === "BRASILEIRA") {
    alert("Pode votar.");
} else {
    alert("Não pode votar.");
}

