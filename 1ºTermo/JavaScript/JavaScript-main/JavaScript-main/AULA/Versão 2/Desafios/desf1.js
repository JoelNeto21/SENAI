function calcularValor(){
    const vetor = document.getElementById("vetorValor").value.split(",").map(Number)
    let valor = 0

    for(let i=0; i < vetor.length; i++){
        if(vetor[i] == 1)
            valor += 5
        else if(vetor[i] == 2)
            valor += 8
        else if(vetor[i] == 3)
            valor += 7,50
        else if(vetor[i] == 4)
            valor += 4
        else
            alert(`[ERRO] Digite um número válido!`)
    }

    document.getElementById("valorTotal").innerHTML = "Total = R$" + valor.toFixed(2)
}