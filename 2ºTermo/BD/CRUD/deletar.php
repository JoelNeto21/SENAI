<title>Deletar</title>
<link rel="stylesheet" href="style.css">

<?php
$conn = new mysqli('localhost', 'root', 'senaisp', 'aula');
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM Usuario WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<span style='color: green;'>Dados deletados com sucesso ✓</span>";
} else {
    echo "Erro: " . $stmt->error;
}
echo "<br><a href='listar.php'><button type='button'>Voltar</button></a>";

$stmt->close();
$conn->close();
?>