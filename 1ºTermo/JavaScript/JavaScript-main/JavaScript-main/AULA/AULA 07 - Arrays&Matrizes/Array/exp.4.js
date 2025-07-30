function buscarElemento(){
    const vetor = document.getElementById("vetorBusca").value.split(",").map(Number)
    const elemento = Number(document.getElementById("elementoBusca").value)
    const indice = vetor.indexOf(elemento)
    document.getElementById("resultadoBusca").innerHTML = "Elemento: " + elemento + "<br>Índice: " + indice
}