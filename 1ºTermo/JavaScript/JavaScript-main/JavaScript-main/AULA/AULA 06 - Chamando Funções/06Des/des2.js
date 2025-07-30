function perguntar(){
    let nome = prompt('Qual é o seu nome?')
    let idade = prompt('Qual a sua idade?')

    exibir = document.getElementById('exibir')
    exibir.innerHTML = `Nome: ${nome}<br>Idade: ${idade} anos`
}