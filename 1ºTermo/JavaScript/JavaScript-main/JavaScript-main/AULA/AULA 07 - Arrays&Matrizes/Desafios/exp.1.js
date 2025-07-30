function calcularMedia(){
    const vetor = document.getElementById("vetorMedia").value.split(",").map(Number)
    let soma = 0
    for(let i=0; i < vetor.length; i++){
        soma += vetor[i]
    }
    let media = soma/vetor.length
    document.getElementById("resultadoMedia").innerHTML = "Média: " + media
}

// Calcular a média de um array