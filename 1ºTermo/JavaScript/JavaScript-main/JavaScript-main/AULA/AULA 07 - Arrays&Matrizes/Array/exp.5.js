function removerDuplicatas(){
    const vetor = document.getElementById("vetorDuplicatas").value.split(",").map(Number)

    const vetorUnico = [... new Set(vetor)]
    document.getElementById("resultadoDuplicatas").innerHTML = "Vetor sem Duplicatas: " + vetorUnico
}