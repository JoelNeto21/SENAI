// 4. Verificação de Desconto
// Escreva um programa que verifique se um cliente tem direito a um desconto
// com base na quantidade de itens comprados e se é um cliente VIP. O desconto
// é concedido se o cliente comprou 10 ou mais itens e é VIP.
// podemos incluir valores a calcular, como quantidade de itens e se é VIP

let quantidade = parseInt(prompt("Digite a quantidade de itens comprados:"));
let vip = prompt("Cliente VIP? (S/N)").toUpperCase();
let itens = [];
itens.push(quantidade);
itens.push(vip);

if (itens[0] >= 10 && itens[1] === "S") {
    alert("Desconto concedido.");
} else {
    alert("Sem desconto.");
}



