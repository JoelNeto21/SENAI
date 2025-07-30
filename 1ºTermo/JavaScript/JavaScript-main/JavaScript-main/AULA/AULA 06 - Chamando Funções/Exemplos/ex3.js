let contador = 0
let resultado = document.getElementById('resultado')

function contar(){
    contador++
    resultado.innerHTML = `<p><mark>${contador}</mark></p>`
}

function diminuir(){
    contador--
    resultado.innerHTML = `<p><mark>${contador}</mark></p>`
}

function zerar(){
    contador = 0
    resultado.innerHTML = `<p><mark>${contador}</mark></p>`
    resultado2.innerHTML = `<p>*Agora o contador foi zerado</p>`
}

