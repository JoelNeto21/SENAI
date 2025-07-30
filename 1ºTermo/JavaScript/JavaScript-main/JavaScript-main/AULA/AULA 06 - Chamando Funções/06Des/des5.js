const dolarTOreal = 5.73

function converter(){
    let reais = Number(prompt('Digite o valor em R$'))

    let exibir = document.getElementById('exibir') 

    exibir.innerHTML = `${reais.toFixed(2)} reais, equivalem à ${(reais/dolarTOreal).toFixed(2)} dólares`
}