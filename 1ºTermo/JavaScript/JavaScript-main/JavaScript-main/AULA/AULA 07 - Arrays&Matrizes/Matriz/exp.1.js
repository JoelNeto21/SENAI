function somarElementosMatriz(){
    const vetor = document.getElementById("matrizSomaElementos").value.split(",").map(Number)
    let soma = 0
    for (let i=0; i<vetor.length;i++){
        soma += vetor[i]
    }
    document.getElementById("resultadoSomaElementos").innerHTML = "Soma: " + soma
}