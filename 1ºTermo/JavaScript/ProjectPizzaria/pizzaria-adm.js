document.addEventListener("DOMContentLoaded", () => {
  // --- ARRAYS DE DADOS E VARIÁVEIS DE ESTADO ---
  let pizzaria = [];
  let vendas = [];
  let proximoCodigoPizza = 1;
  let pizzaParaAlterar = null;

  // --- ELEMENTOS DO DOM ---
  const secoes = document.querySelectorAll(".secao");
  const menuLateral = document.getElementById("menu-lateral");
  const containerPrincipal = document.getElementById("container-principal");

  // --- FUNÇÕES DE PERSISTÊNCIA (localStorage) ---
  function salvarDados() {
    localStorage.setItem("listaDePizzas", JSON.stringify(pizzaria));
    localStorage.setItem("listaDeVendas", JSON.stringify(vendas));
    localStorage.setItem("proximoCodigoPizza", proximoCodigoPizza);
  }

  function carregarDados() {
    pizzaria = JSON.parse(localStorage.getItem("listaDePizzas")) || [];
    vendas = JSON.parse(localStorage.getItem("listaDeVendas")) || [];
    proximoCodigoPizza =
      parseInt(localStorage.getItem("proximoCodigoPizza")) || 1;

    if (pizzaria.length === 0) {
      // Pizzas pre-cadastradas
      const pizzasPreCadastradas = [
        {
          codigo: "001",
          nome: "Margherita",
          ingredientes: "Molho de tomate, mussarela, manjericão",
          preco: 35.0,
        },
        {
          codigo: "002",
          nome: "Calabresa",
          ingredientes: "Molho de tomate, mussarela, calabresa",
          preco: 40.0,
        },
        {
          codigo: "003",
          nome: "Frango com Catupiry",
          ingredientes: "Molho de tomate, mussarela, frango desfiado, catupiry",
          preco: 45.0,
        },
        {
          codigo: "004",
          nome: "Portuguesa",
          ingredientes:
            "Molho de tomate, mussarela, presunto, ovo, cebola, azeitona",
          preco: 42.0,
        },
        {
          codigo: "005",
          nome: "Vegetariana",
          ingredientes:
            "Molho de tomate, mussarela, pimentão, tomate, cebola, champignon",
          preco: 48.0,
        },
      ];

      pizzaria = pizzasPreCadastradas;
      proximoCodigoPizza = 6; // Ajusta o próximo código
      salvarDados(); // Salva as pizzas no localStorage
    }
  }

  // --- FUNÇÕES DE UI (Interface do Usuário) ---
  function exibirMensagem(idElemento, texto, tipo) {
    const msgElemento = document.getElementById(idElemento);
    if (!msgElemento) return;
    msgElemento.textContent = texto;
    msgElemento.className = `mensagem ${tipo}`;
    setTimeout(() => msgElemento.classList.add("hidden"), 3000);
  }

  window.mostrarSecao = (idSecao) => {
    secoes.forEach((secao) => {
      secao.classList.add("hidden");
    });
    const secaoAtiva = document.getElementById(idSecao);
    if (secaoAtiva) {
      secaoAtiva.classList.remove("hidden");
      if (idSecao === "consulta") atualizarTabelaPizzas();
      if (idSecao === "venda") atualizarSelectPizzasVenda();
      if (idSecao === "relatorio") atualizarTabelaRelatorio();
    }
  };

  window.toggleMenu = () => {
    menuLateral.classList.toggle("escondido");
    containerPrincipal.classList.toggle("menu-fechado");
  };

  // --- FUNÇÕES DE LÓGICA DO NEGÓCIO ---

  function handleCadastro(event) {
    event.preventDefault();
    const nome = document.getElementById("nome").value.trim();
    const ingredientes = document.getElementById("ingredientes").value.trim();
    const preco = parseFloat(document.getElementById("preco").value);

    if (pizzaria.some((p) => p.nome.toLowerCase() === nome.toLowerCase())) {
      exibirMensagem(
        "msg-cadastro",
        "Erro: Já existe uma pizza com esse nome.",
        "erro"
      );
      return;
    }

    const codigo = proximoCodigoPizza.toString().padStart(3, "0");
    pizzaria.push({ codigo, nome, ingredientes, preco });
    proximoCodigoPizza++;

    salvarDados();
    exibirMensagem(
      "msg-cadastro",
      `Pizza "${nome}" cadastrada com sucesso!`,
      "sucesso"
    );
    event.target.reset();
  }

  function atualizarTabelaPizzas(lista = pizzaria) {
    const corpoTabela = document.getElementById("lista-pizzas");
    corpoTabela.innerHTML = "";
    if (lista.length === 0) {
      corpoTabela.innerHTML =
        '<tr><td colspan="4">Nenhuma pizza encontrada.</td></tr>';
      return;
    }
    lista.forEach((pizza) => {
      const row = `<tr>
        <td>${pizza.codigo}</td>
        <td>${pizza.nome}</td>
        <td>${pizza.ingredientes}</td>
        <td>R$ ${pizza.preco.toFixed(2).replace(".", ",")}</td>
      </tr>`;
      corpoTabela.innerHTML += row;
    });
  }

  window.filtrarPizzas = () => {
    const termoBusca = document.getElementById("busca").value.toLowerCase();
    const resultado = pizzaria.filter(
      (p) =>
        p.nome.toLowerCase().includes(termoBusca) ||
        p.codigo.includes(termoBusca)
    );
    atualizarTabelaPizzas(resultado);
  };

  function buscarPizzaParaAlterar(event) {
    event.preventDefault();
    const codigoBusca = document.getElementById("busca-alterar").value;
    pizzaParaAlterar = pizzaria.find((p) => p.codigo === codigoBusca);

    const formAlterar = document.getElementById("form-alterar");
    if (pizzaParaAlterar) {
      document.getElementById("codigo-pizza-alterar").textContent =
        pizzaParaAlterar.codigo;
      document.getElementById("novo-nome").value = pizzaParaAlterar.nome;
      document.getElementById("novos-ingredientes").value =
        pizzaParaAlterar.ingredientes;
      document.getElementById("novo-preco").value = pizzaParaAlterar.preco;
      formAlterar.classList.remove("hidden");
      exibirMensagem(
        "msg-alterar",
        "Pizza encontrada. Altere os dados abaixo.",
        "sucesso"
      );
    } else {
      formAlterar.classList.add("hidden");
      exibirMensagem(
        "msg-alterar",
        "Nenhuma pizza encontrada com este código.",
        "erro"
      );
    }
  }

  function handleAlteracao(event) {
    event.preventDefault();
    if (!pizzaParaAlterar) return;

    pizzaParaAlterar.nome = document.getElementById("novo-nome").value.trim();
    pizzaParaAlterar.ingredientes = document
      .getElementById("novos-ingredientes")
      .value.trim();
    pizzaParaAlterar.preco = parseFloat(
      document.getElementById("novo-preco").value
    );

    salvarDados();
    exibirMensagem("msg-alterar", "Pizza alterada com sucesso!", "sucesso");
    document.getElementById("form-alterar").classList.add("hidden");
    document.getElementById("form-busca-alterar").reset();
    pizzaParaAlterar = null;
  }

  function atualizarSelectPizzasVenda() {
    const select = document.getElementById("venda-pizza");
    select.innerHTML =
      '<option value="" selected hidden disabled>-- Selecione uma pizza --</option>';
    pizzaria.forEach((pizza) => {
      select.innerHTML += `<option value="${pizza.codigo}">${
        pizza.nome
      } - R$ ${pizza.preco.toFixed(2)}</option>`;
    });
  }

  function handleVenda(event) {
    event.preventDefault();
    const pizzaSelecionadaCod = document.getElementById("venda-pizza").value;
    const quantidade = parseInt(
      document.getElementById("venda-quantidade").value
    );
    const comprador =
      document.getElementById("venda-comprador").value.trim() || "Balcão";

    const pizza = pizzaria.find((p) => p.codigo === pizzaSelecionadaCod);
    if (!pizza) {
      exibirMensagem("msg-venda", "Erro: Pizza inválida.", "erro");
      return;
    }

    const totalVenda = pizza.preco * quantidade;
    vendas.push({
      nomePizza: pizza.nome,
      quantidade: quantidade,
      comprador: comprador,
      total: totalVenda,
    });

    salvarDados();
    exibirMensagem("msg-venda", "Venda registrada com sucesso!", "sucesso");
    event.target.reset();
  }

  function atualizarTabelaRelatorio() {
    const corpoTabela = document.getElementById("tabela-relatorio-vendas");
    corpoTabela.innerHTML = "";
    if (vendas.length === 0) {
      corpoTabela.innerHTML =
        '<tr><td colspan="4">Nenhuma venda registrada ainda.</td></tr>';
      return;
    }

    let totalGeral = 0;
    vendas.forEach((venda) => {
      const row = `<tr>
              <td>${venda.nomePizza}</td>
              <td>${venda.quantidade}</td>
              <td>${venda.comprador}</td>
              <td>R$ ${venda.total.toFixed(2).replace(".", ",")}</td>
          </tr>`;
      corpoTabela.innerHTML += row;
      totalGeral += venda.total;
    });

    const totalRow = `<tr style="font-weight: bold; background-color: #f0f2f5;">
          <td colspan="3">TOTAL GERAL</td>
          <td>R$ ${totalGeral.toFixed(2).replace(".", ",")}</td>
      </tr>`;
    corpoTabela.innerHTML += totalRow;
  }

  // --- EVENT LISTENERS ---
  document
    .getElementById("form-cadastro")
    .addEventListener("submit", handleCadastro);
  document
    .getElementById("form-busca-alterar")
    .addEventListener("submit", buscarPizzaParaAlterar);
  document
    .getElementById("form-alterar")
    .addEventListener("submit", handleAlteracao);
  document.getElementById("form-venda").addEventListener("submit", handleVenda);

  // --- INICIALIZAÇÃO ---
  carregarDados();
  mostrarSecao("cadastro");
});
