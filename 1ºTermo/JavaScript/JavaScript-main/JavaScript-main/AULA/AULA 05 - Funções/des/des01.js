let hablitacao = (prompt("Possui habilitação? (S/N) ")).toUpperCase()
let idade = prompt("Digite sua idade: ");
podeDirigir();

function podeDirigir() {
  if (hablitacao == "S" && idade >= 18)
    alert("Você é maior de idade, e já pode dirigir!");
  else 
    alert("Você ainda não pode dirigir!");
}
