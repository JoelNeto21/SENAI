let usuario = prompt("Digite seu nome de usuário: ");
let senha = prompt("Digite sua senha: ");
login();

function login() {
  if (usuario.includes("JoelNeto7") == true && senha.length == 8)
    alert("Você tem acesso!");
  else 
    alert("Você não tem acesso!");
}
