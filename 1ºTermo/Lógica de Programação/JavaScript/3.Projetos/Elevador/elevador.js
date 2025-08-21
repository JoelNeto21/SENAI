const elevador = document.querySelector('.elevador');
const botoes_andar = document.querySelectorAll('.andar-botao');
const tamanho_piso = 117; // Altura de cada andar

let andar_atual = 0; // Começa no 3º andar

botoes_andar.forEach(button => {
  button.addEventListener('click', () => {
    const andar_destino = parseInt(button.dataset.floor);
    moverElevador(andar_destino);
  });
});

function moverElevador(andar_destino) {
  const distancia = andar_destino * tamanho_piso; // Calcula a posição correta
  elevador.style.bottom = `${distancia}px`; // Move o elevador para o andar correspondente
  andar_atual = andar_destino; // Atualiza o andar atual
}