function calcMedia(notas) {
    notas.push(6, 10)
    let soma = 0
    for (let i = 0; i < notas.length; i++) {
        soma += notas[i]
    }
    return soma / notas.length
}

let notas = []
notas.push(6, 10)


for (let i = 0; i < 4; i++) {
    notas.push(Number(prompt(`Digite a nota do ${i + 1}º trabalho: `)))
}

media = calcMedia(notas).toFixed(1)
alert(`A soma dos numeros é: ${media}`)