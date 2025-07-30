function somarLinhasMatriz() {
  const vetor = document
    .getElementById("matrizSomaLinhas")
    .value.split(",")
    .map(Number);
    const matriz=[]
  for (let i = 0; i < 3; i++) {
    matriz[i] = vetor.slice(i * 3, (i + 1) * 3);
  }
  let resultado = "";
  for (let i = 0; i < 3; i++) {
    let soma = 0
    for(let j = 0; j < 3; j++){
        soma += matriz[i][j]
    }
    resultado += "Linha " + (i + 1) + ": " + soma + "<br>"
  }
  document.getElementById("resultadoSomaLinhas").innerHTML = resultado;
}
