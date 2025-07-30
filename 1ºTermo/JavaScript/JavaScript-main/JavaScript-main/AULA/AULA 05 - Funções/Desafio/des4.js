alert(`Bem-Vindo ao Lava Rápido do João!\nO melhor da região!`)
alert('Serviços disponíveis:\n1 - Lavagem simples - R$ 20,00\n2 - Lavagem completa - R$ 30,00\n3 - Enceramento - R$ 50,00')

let qtd = Number(prompt('Quantos serviços você quer?'))
let serviço = 0
let total = 0

for (let i = 0; i < qtd; i++) {
    serviço = Number(prompt('Serviços disponíveis:\n1 - Lavagem simples - R$ 20,00\n2 - Lavagem completa - R$ 30,00\n3 - Enceramento - R$ 50,00\n\nEscolha o serviço desejado:'))
    if (serviço == 1) {
        alert('Lavagem simples - R$ 20,00')
        total += 20
    } else if (serviço == 2) {
        alert('Lavagem completa - R$ 30,00')
        total += 30
    } else if (serviço == 3) {
        alert('Enceramento - R$ 50,00')
        total += 50
    } else
        alert('Serviço não encontrado! Digite um número válido.')
}



let nome = prompt('Qual o seu nome? ')
let placa = prompt('Placa do veículo: ')
alert(`Cliente: ${nome}\nCarro(placa): ${placa}\nTotal: R$ ${total.toFixed(2)}`)