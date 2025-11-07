<title>Exibir</title>
<link rel="stylesheet" href="style.css">

<?php
$conn = new mysqli('localhost', 'root', 'senaisp', 'aula');
$result = $conn->query("SELECT * FROM Usuario");

echo "<h2>Usuários</h2>";
echo "<table border='1'>";
echo "<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
</tr>";

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['email']}</td>
            <td>
                <div class='acoes'>
                    <a id='update' href='editar.php?id={$row['id']}'><button type='button'>Editar</button></a> 
                    <a id='delete' href='deletar.php?id={$row['id']}'><button type='button'>Deletar</button></a>
                </div>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4' style='font-size: 18px; text-align:center; padding:20px;'>Nenhum usuário cadastrado...</td></tr>";
}
echo "</table>";
echo "<br><a href='index.html'><button type='button'>Voltar</button></a>";
$conn->close();
?>