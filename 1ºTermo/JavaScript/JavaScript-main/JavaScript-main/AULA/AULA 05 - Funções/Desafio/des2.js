function compras(valores) {
    let soma = 0;
    for (let i = 0; i < valores.length; i++) {
      soma += valores[i];
    }
    return soma
  }
  
  let valores = [];
  let qtd = parseFloat(prompt("Digite a quantidade de produtos que você comprou:"));
  
  for (let i = 0; i < qtd; i++) {
    let valor = parseFloat(prompt(`Digite o valor do ${i + 1}º produto:`));
    valores.push(valor);
  }
  
  let total = compras(valores);
  alert(`O valor total da compra é: ${total}`);
