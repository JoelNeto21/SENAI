function calcular(){
    let produto = prompt('Digite o nome do produto:')
    let preco = Number(prompt('Digite o valor do produto:'))
    let valorCliente = Number(prompt('Quanto o cliente pagou?'))

    let exibir = document.getElementById('exibir') 

    exibir.innerHTML = `Produto: ${produto.toUpperCase()}<br>Cliente pagou: R$${valorCliente.toFixed(2)}<br><br>TROCO: R$${(valorCliente - preco).toFixed(2)}`
}