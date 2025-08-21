discos = []
function addDisco() {
  let titulo = prompt("Digite o nome do Disco:");
  let artista = prompt("Digite o autor do Disco:");
  let ano = Number(prompt("Digite o ano do Disco:"));
  let preco = Number(prompt("Digite o preço do Disco:"));
  discos.push(titulo, artista, ano, preco);
  //alert(discos.join(', '));
  alert("Disco adicionado com sucesso!\n" + discos.join(' | ') + "reais");
} addDisco();