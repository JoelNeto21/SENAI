function contarImparesMatriz() {
    const vetor = document.getElementById("matrizImpares").value.split(",").map(Number);
    const matriz = [];
    for (let i = 0; i < 4; i++) {
      matriz[i] = vetor.slice(i * 4, (i + 1) * 4);
    }
    let impares = 0;
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        if(matriz[i][j] % 2 != 0){
          impares++
        }
      }
    }
    document.getElementById("resultadoImparesMatriz").innerHTML = "Impares: " + impares;
  }
  
// Contar os valores ímpares