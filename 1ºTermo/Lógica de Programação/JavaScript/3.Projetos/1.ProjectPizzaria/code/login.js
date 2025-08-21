/**
 * Exibe uma mensagem de feedback na tela de login.
 * @param {string} texto - O texto a ser exibido.
 * @param {'sucesso' | 'erro'} tipo - O tipo da mensagem.
 */
function exibirMensagem(texto, tipo) {
  const msgElemento = document.getElementById("msg");
  if (!msgElemento) return;

  msgElemento.innerHTML = texto;
  msgElemento.className = `mensagem ${tipo}`;
  msgElemento.classList.remove("hidden");

  // Esconde a mensagem após 3 segundos
  setTimeout(() => {
    msgElemento.classList.add("hidden");
  }, 3000);
}

/**
 * Valida as credenciais do usuário e redireciona conforme o perfil.
 * @param {Event} event - O evento de submissão do formulário.
 */
function validarLogin(event) {
  event.preventDefault();

  const usuarioInput = document.getElementById("usuario").value;
  const senhaInput = document.getElementById("senha").value;

  const credenciais = {
    admin: { senha: "1234", pagina: "pizzaria-adm.html" }, // Caminho para tela de administrador
    user: { senha: "4321", pagina: "pizzaria-client.html" }, // Caminho para tela de cliente
  };

  const perfil = credenciais[usuarioInput];

  if (perfil && perfil.senha === senhaInput) {
    exibirMensagem(
      "Login realizado com sucesso! <br> Redirecionando...",
      "sucesso"
    );
    setTimeout(() => {
      window.location.href = perfil.pagina;
    }, 1500);
  } else {
    exibirMensagem("Usuário ou senha incorretos.", "erro");
  }
}
