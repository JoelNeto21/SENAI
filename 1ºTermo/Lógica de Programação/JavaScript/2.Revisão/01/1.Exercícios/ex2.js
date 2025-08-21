// 2. Verificação de Acesso a um Sistema
// Escreva um programa que verifique se um usuário tem acesso a um sistema
// com base em seu nome de usuário e senha.

let usuario = prompt("Digite o nome de usuário:");
let senha = prompt("Digite a senha:");

if (usuario === "admin" && senha === "admin") {
    alert("Acesso concedido.");
} else {
    alert("Acesso negado.");
}
