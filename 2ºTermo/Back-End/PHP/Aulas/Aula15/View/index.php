<?php
require_once __DIR__ . '/../Controller/BebidaController.php';

$controller = new BebidaController();
$mensagem = '';
$tipoMensagem = '';

// Ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $resultado = $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
        if ($resultado) {
            $mensagem = 'Bebida cadastrada com sucesso!';
            $tipoMensagem = 'sucesso';
        } else {
            $mensagem = 'Erro: Já existe uma bebida com o nome "' . htmlspecialchars($_POST['nome']) . '". Por favor, escolha outro nome.';
            $tipoMensagem = 'erro';
        }
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
        $mensagem = 'Bebida deletada com sucesso!';
        $tipoMensagem = 'sucesso';
    }
}

$lista = $controller->ler();
?>

<!-- Formulário em HTML -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        form {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        input,
        select,
        button {
            margin: 5px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
            /* Alinhamento do conteúdo das células/tabelas */
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-deletar {
            background-color: #f44336;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-deletar:hover {
            background-color: #da190b;
        }

        /* Estilos do Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 30px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            animation: slideDown 0.3s;
            text-align: center;
        }

        .modal-content.sucesso {
            border-top: 5px solid #4CAF50;
        }

        .modal-content.erro {
            border-top: 5px solid #f44336;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            line-height: 20px;
        }

        .close:hover,
        .close:focus {
            color: #000;
        }

        .modal-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .modal-icon.sucesso {
            color: #4CAF50;
        }

        .modal-icon.erro {
            color: #f44336;
        }

        .modal-message {
            font-size: 18px;
            margin: 20px 0;
            color: #333;
        }

        .modal-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .modal-btn:hover {
            background-color: #45a049;
        }

        /* Modal de confirmação específica */
        .modal-content.confirm {
            border-top: 5px solid #f44336;
        }
        .modal-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 15px;
        }
        .btn-cancel {
            background-color: #9e9e9e;
            color: #fff;
        }
        .btn-cancel:hover {
            background-color: #7e7e7e;
        }
        .btn-confirm {
            background-color: #f44336;
            color: #fff;
        }
        .btn-confirm:hover {
            background-color: #da190b;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <h1>Gerenciamento de Bebidas🥤</h1>
    <!-- <h1 style="text-align: center;">GERENCIAMENTO DE BEBIDAS</h1> -->
    <br>
    <hr>
    <h2>Cadastrar Nova Bebida</h2>
    <form method="POST">
        <input type="hidden" name="acao" value="salvar">
        <input type="text" name="nome" placeholder="Nome da bebida:" required>
        <select name="categoria" required>
            <option value="">Selecione a categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
        <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
        <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
        <button type="submit">Cadastrar</button>
    </form>

    <hr>
    <h2>Lista de Bebidas Cadastradas</h2>

    <?php if (empty($lista)): ?>
        <p>Nenhuma bebida cadastrada ainda...</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Volume</th>
                    <th>Valor (R$)</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; foreach ($lista as $bebida): $i++; ?>
                    <tr>
                        <td><?php echo htmlspecialchars($bebida->getNome()); ?></td>
                        <td><?php echo htmlspecialchars($bebida->getCategoria()); ?></td>
                        <td><?php echo htmlspecialchars($bebida->getVolume()); ?></td>
                        <td><?php echo number_format($bebida->getValor(), 2, ',', '.'); ?></td>
                        <td><?php echo htmlspecialchars($bebida->getQtde()); ?></td>
                        <td>
                            <form id="form-del-<?php echo $i; ?>" method="POST" style="display: inline; padding: 0; margin: 0; background: none;">
                                <input type="hidden" name="acao" value="deletar">
                                <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                                <button type="button" class="btn-deletar" onclick="openConfirmDelete('form-del-<?php echo $i; ?>','<?php echo htmlspecialchars($bebida->getNome()); ?>')">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <!-- Modal de Mensagem -->
    <div id="modalMensagem" class="modal">
        <div class="modal-content <?php echo $tipoMensagem; ?>">
            <span class="close" onclick="fecharModal()">&times;</span>
            <div class="modal-icon <?php echo $tipoMensagem; ?>">
                <?php if ($tipoMensagem === 'sucesso'): ?>
                    ✓
                <?php else: ?>
                    ⚠
                <?php endif; ?>
            </div>
            <div class="modal-message">
                <?php echo $mensagem; ?>
            </div>
            <button class="modal-btn" onclick="fecharModal()">OK</button>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão -->
    <div id="modalConfirm" class="modal">
        <div class="modal-content confirm">
            <span class="close" onclick="fecharModalConfirm()">&times;</span>
            <div class="modal-icon erro">⚠</div>
            <div class="modal-message">
                Tem certeza que deseja deletar a bebida: <strong id="confirmNome"></strong>?
            </div>
            <div class="modal-actions">
                <button class="modal-btn btn-cancel" onclick="fecharModalConfirm()">Cancelar</button>
                <button class="modal-btn btn-confirm" onclick="confirmarExclusao()">Deletar</button>
            </div>
        </div>
    </div>

    <script>
        // Estado para confirmação de exclusão
        let currentFormToSubmit = null;

        function openConfirmDelete(formId, nome) {
            currentFormToSubmit = formId;
            var spanNome = document.getElementById('confirmNome');
            if (spanNome) spanNome.textContent = nome;
            var modal = document.getElementById('modalConfirm');
            if (modal) modal.style.display = 'block';
        }

        function fecharModalConfirm() {
            var modal = document.getElementById('modalConfirm');
            if (modal) modal.style.display = 'none';
            currentFormToSubmit = null;
        }

        function confirmarExclusao() {
            if (currentFormToSubmit) {
                var form = document.getElementById(currentFormToSubmit);
                if (form) form.submit();
                fecharModalConfirm();
            }
        }

        // Verifica se há mensagem para exibir
        <?php if (!empty($mensagem)): ?>
            window.onload = function() {
                document.getElementById('modalMensagem').style.display = 'block';
            };
        <?php endif; ?>

        // Função para fechar o modal
        function fecharModal() {
            document.getElementById('modalMensagem').style.display = 'none';
        }

        // Fecha o modal ao clicar fora dele
        window.onclick = function(event) {
            var modalMsg = document.getElementById('modalMensagem');
            var modalConf = document.getElementById('modalConfirm');
            if (event.target == modalMsg) {
                fecharModal();
            }
            if (event.target == modalConf) {
                fecharModalConfirm();
            }
        };
    </script>

</body>

</html>