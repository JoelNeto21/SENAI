function calcProduto(){
    let preco = Number(prompt('Digite o preço do produto:'))
    let porc = Number(prompt('Digite a porcentagem do desconto:'))
    let valor = (preco * porc) / 100
    let total = preco - valor
    
    let res = document.getElementById('result')
    
    res.innerHTML = `<p>O produto custa R$${preco.toFixed(2)}.</p>`
    res.innerHTML += `<p>Um desconto de ${porc}% (-R$${valor.toFixed(2)}) será aplicado sobre o preço do produto.</p>`
    res.innerHTML += `<p>O valor final a ser pago será de <strong><mark>R$${total.toFixed(2)}</mark></strong>.</p>`
}