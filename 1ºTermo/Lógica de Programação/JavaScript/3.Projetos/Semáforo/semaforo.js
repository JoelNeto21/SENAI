let estado = 0;

function mudarLuz() {
  const luzVermelha = document.getElementById("vermelha");
  const luzLaranja = document.getElementById("laranja");
  const luzAzul = document.getElementById("azul"); 
  const luzVerde = document.getElementById("verde");

  luzVermelha.classList.remove("vermelha");
  luzLaranja.classList.remove("laranja");
  luzAzul.classList.remove("azul");
  luzVerde.classList.remove("verde");

  if (estado === 0) {
    luzVermelha.classList.add("vermelha");
    estado = 1;
  } else if (estado === 1) {
    luzLaranja.classList.add("laranja");
    estado = 2;
  } else if (estado === 2) {
    luzAzul.classList.add("azul");
    estado = 3;
  } else {
    luzVerde.classList.add("verde");
    estado = 0;
  }
}
