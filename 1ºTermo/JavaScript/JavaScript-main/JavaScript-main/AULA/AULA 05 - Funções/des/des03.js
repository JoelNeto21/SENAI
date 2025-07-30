let idade = prompt("Digite sua idade:");
let nacionalidade = (prompt("Em qual país você mora?")).toLowerCase()
podeVotar();

function podeVotar() {
  if (idade >= 16 && nacionalidade.includes("brasil"))
    alert("Você já pode votar!");
  else 
    alert("Você ainda não pode votar!");
}
