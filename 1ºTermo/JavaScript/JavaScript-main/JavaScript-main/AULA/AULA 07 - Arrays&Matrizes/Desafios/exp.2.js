function maiorValor(){
    const array = document.getElementById("maiorNum").value.split(",").map(Number)
    let maior = array[0]
    for(let i = 1; i < array.length; i++){
        if(array[i] > maior){
            maior = array[i]
        }
    }
    document.getElementById("resultMaior").innerHTML = "Maior: " + maior
}

// Retornar somente o maior valor da lista