let soma = 50.00
let qtd = prompt("Quantidade de produtos comprados:")
let vip = (prompt("Já é cliente VIP?")).toUpperCase()
temDesconto()

function temDesconto() {
  if (vip == "S" && qtd >= 5){
    alert("Você ganhou 10% de desconto!")
    alert(
        "Total sem desconto\n" + 
        `R$${soma}` + 
        "\n\n-------------------------\n\n" + 
        "Total após o desconto\n" + 
        `R$${calcDesconto()}`
    )
  }
  else 
    alert("Você não é elegível para o desconto.\nQue pena...")
}

function calcDesconto(){
    let total = soma - (soma * 0.1)
    return total.toFixed(2)
}
