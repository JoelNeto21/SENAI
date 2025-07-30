function somarDiagonalPrincipalMatriz() {
  const vetor = document.getElementById("matrizDiagonal").value.split(",").map(Number);
  const matriz = [];
  for (let i = 0; i < 4; i++) {
    matriz[i] = vetor.slice(i * 4, (i + 1) * 4);
  }
  let soma = 0;
  for (let i = 0; i < 4; i++) {
    soma += matriz[i][i];
  }
  document.getElementById("resultadoDiagonal").innerHTML = "Soma da Diagonal Principal: " + soma;
}
