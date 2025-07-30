function encontreMaiorMenorValor(){
    const vetor = document.getElementById("vetorMaiorMenor").value.split(",").map(Number)
    let maior = vetor[0]
    let menor = vetor[0]
    for(let i = 1; i < vetor.length; i++){
        if(vetor[i] > maior){
            maior = vetor[i]
        }
        if(vetor[i] < menor){
            menor = vetor[i]
        }
    }
    document.getElementById("resultadoMaiorMenor").innerHTML = "Maior: " + maior + ", Menor: " + menor
}