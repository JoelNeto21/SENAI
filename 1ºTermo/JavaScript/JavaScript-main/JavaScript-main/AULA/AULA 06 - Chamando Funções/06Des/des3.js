function visinhos(){
    let num = Number(prompt('Digite um número:'))
    alert(`${num -1} - ${num} - ${num + 1}`)
} 

function visinhos(){
    let num = Number(prompt('Digite um número:'))
    let exibir = document.getElementById('exibir') 
    exibir.innerHTML = `Antecessor: ${num -1}<br>Número: ${num}<br>Sucessor: ${num + 1}`
} 