document.addEventListener("DOMContentLoaded", () => {
  // --- DADOS DO CARDÁPIO ---
  const pizzas = JSON.parse(localStorage.getItem("listaDePizzas")) || [
    {
      codigo: "000",
      nome: "Nenhuma pizza cadastrada",
      ingredientes: "Peça para o administrador cadastrar novas pizzas!",
      preco: 0.0,
    },
  ];

  let carrinho = [];

  // --- ELEMENTOS DO HTML (DOM) ---
  const elementoCardapio = document.getElementById("cardapio");
  const elementoCarrinhoLateral = document.getElementById("carrinho-lateral");
  const elementoItensCarrinho = document.getElementById("carrinho-itens");
  const elementoContagemCarrinho = document.getElementById("contagem-carrinho");
  const elementoValorTotal = document.getElementById("valor-total-carrinho");
  const botaoFinalizarPedido = document.getElementById(
    "botao-finalizar-pedido"
  );
  const modalConfirmacao = document.getElementById("modal-confirmacao");

  // --- FUNÇÕES ---
  function renderizarCardapio() {
    elementoCardapio.innerHTML = "";
    pizzas.forEach((pizza) => {
      const card = document.createElement("div");
      card.className = "pizza-card";
      card.innerHTML = `
                <img src="https://placehold.co/600x400/d92323/FFFFFF?text=${pizza.nome.replace(
                  / /g,
                  "+"
                )}" alt="Pizza de ${pizza.nome}" class="pizza-imagem">
                <div class="pizza-info">
                    <h3 class="pizza-nome">${pizza.nome}</h3>
                    <p class="pizza-ingredientes">${pizza.ingredientes}</p>
                    <div class="pizza-rodape">
                        <span class="pizza-preco">R$ ${pizza.preco
                          .toFixed(2)
                          .replace(".", ",")}</span>
                        <button class="botao-adicionar" data-id="${
                          pizza.codigo
                        }">Adicionar</button>
                    </div>
                </div>
            `;
      elementoCardapio.appendChild(card);
    });
  }

  function renderizarCarrinho() {
    elementoItensCarrinho.innerHTML = "";
    if (carrinho.length === 0) {
      elementoItensCarrinho.innerHTML =
        '<p class="carrinho-vazio-mensagem">Seu carrinho está vazio.</p>';
    } else {
      carrinho.forEach((item) => {
        const itemElemento = document.createElement("div");
        itemElemento.className = "item-carrinho";
        itemElemento.innerHTML = `
                    <img src="https://placehold.co/100x100/d92323/FFFFFF?text=${item.nome.replace(
                      / /g,
                      "+"
                    )}" alt="${item.nome}" class="item-carrinho-imagem">
                    <div class="item-carrinho-info">
                        <p class="item-carrinho-nome">${item.nome}</p>
                        <div class="item-controles-quantidade">
                            <button class="botao-quantidade" data-id="${
                              item.codigo
                            }" data-acao="remover">-</button>
                            <span>${item.quantidade}</span>
                            <button class="botao-quantidade" data-id="${
                              item.codigo
                            }" data-acao="adicionar">+</button>
                        </div>
                    </div>
                    <span class="item-carrinho-preco-total">R$ ${(
                      item.preco * item.quantidade
                    )
                      .toFixed(2)
                      .replace(".", ",")}</span>
                `;
        elementoItensCarrinho.appendChild(itemElemento);
      });
    }
    atualizarTotais();
  }

  function adicionarAoCarrinho(pizzaId) {
    const pizzaExistente = carrinho.find((item) => item.codigo === pizzaId);
    if (pizzaExistente) {
      pizzaExistente.quantidade++;
    } else {
      const pizza = pizzas.find((p) => p.codigo === pizzaId);
      if (pizza) {
        carrinho.push({ ...pizza, quantidade: 1 });
      }
    }
    renderizarCarrinho();
  }

  function alterarQuantidade(pizzaId, acao) {
    const itemNoCarrinho = carrinho.find((item) => item.codigo === pizzaId);
    if (!itemNoCarrinho) return;

    if (acao === "adicionar") {
      itemNoCarrinho.quantidade++;
    } else if (acao === "remover") {
      itemNoCarrinho.quantidade--;
    }

    if (itemNoCarrinho.quantidade === 0) {
      carrinho = carrinho.filter((item) => item.codigo !== pizzaId);
    }
    renderizarCarrinho();
  }

  function atualizarTotais() {
    const quantidadeTotal = carrinho.reduce(
      (total, item) => total + item.quantidade,
      0
    );
    elementoContagemCarrinho.textContent = quantidadeTotal;

    const valorTotal = carrinho.reduce(
      (total, item) => total + item.preco * item.quantidade,
      0
    );
    elementoValorTotal.textContent = `R$ ${valorTotal
      .toFixed(2)
      .replace(".", ",")}`;

    botaoFinalizarPedido.disabled = carrinho.length === 0;
  }

  function finalizarPedido() {
    if (carrinho.length === 0) return;

    const vendas = JSON.parse(localStorage.getItem("listaDeVendas")) || [];
    const novaVenda = {
      nomePizza: carrinho
        .map((item) => `${item.nome} (x${item.quantidade})`)
        .join(", "),
      quantidade: carrinho.reduce((total, item) => total + item.quantidade, 0),
      comprador: "Cliente Online",
      total: carrinho.reduce(
        (total, item) => total + item.preco * item.quantidade,
        0
      ),
    };
    vendas.push(novaVenda);
    localStorage.setItem("listaDeVendas", JSON.stringify(vendas));

    modalConfirmacao.style.display = "flex";
    carrinho = [];
    renderizarCarrinho();
    elementoCarrinhoLateral.classList.remove("aberto");
  }

  // --- EVENT LISTENERS ---
  document
    .getElementById("botao-abrir-carrinho")
    .addEventListener("click", () =>
      elementoCarrinhoLateral.classList.add("aberto")
    );
  document
    .getElementById("botao-fechar-carrinho")
    .addEventListener("click", () =>
      elementoCarrinhoLateral.classList.remove("aberto")
    );
  document
    .getElementById("botao-fechar-modal")
    .addEventListener("click", () => (modalConfirmacao.style.display = "none"));
  botaoFinalizarPedido.addEventListener("click", finalizarPedido);

  elementoCardapio.addEventListener("click", (evento) => {
    if (evento.target.classList.contains("botao-adicionar")) {
      const botao = evento.target;
      const pizzaId = botao.dataset.id;
      adicionarAoCarrinho(pizzaId);

      botao.textContent = "Adicionado!";
      botao.classList.add("botao-adicionado");
      setTimeout(() => {
        botao.textContent = "Adicionar";
        botao.classList.remove("botao-adicionado");
      }, 1000);
    }
  });

  elementoItensCarrinho.addEventListener("click", (evento) => {
    if (evento.target.classList.contains("botao-quantidade")) {
      const pizzaId = evento.target.dataset.id;
      const acao = evento.target.dataset.acao;
      alterarQuantidade(pizzaId, acao);
    }
  });

  // --- INICIALIZAÇÃO ---
  renderizarCardapio();
});
