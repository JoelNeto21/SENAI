let contador = 0
let cont = document.querySelector('section#result')
 
function contar() {
    contador++
    cont.innerHTML = `<p>Agora o contador está em <mark>${contador}</mark>.</p>`
}

function zerar() {
    contador = 0
    cont.innerHTML = `<p>O contador foi zerado.</p>`
}