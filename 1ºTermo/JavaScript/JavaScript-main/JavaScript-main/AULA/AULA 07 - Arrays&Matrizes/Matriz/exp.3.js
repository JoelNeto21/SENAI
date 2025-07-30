function somarColunasMatriz() {
  const vetor = document
    .getElementById("matrizSomaColunas")
    .value.split(",")
    .map(Number);
    const matriz=[]
  for (let i = 0; i < 3; i++) {
    matriz[i] = vetor.slice(i * 3, (i + 1) * 3);
  }
  let resultado = "";
  for (let j = 0; j < 3; j++) {
    let soma = 0
    for(let i = 0; i < 3; i++){
        soma += matriz[i][j]
    }
    resultado += "Coluna " + (j + 1) + ": " + soma + "<br>"
  }
  document.getElementById("resultadoSomaColunas").innerHTML = resultado;
}
