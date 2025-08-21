

let quantidade = parseInt(prompt("Digite a quantidade de itens comprados:"));
let vip = prompt("Cliente VIP? (S/N)").toUpperCase();
let itens = [];
itens.push(quantidade);
itens.push(vip);

if (itens[0] >= 10 && itens[1] === "S") {
    res = itens[0] * 10;
    alert(`Desconto concedido. Valor total: ${res}`);
    
}
else {
    alert("Sem desconto.");
}

