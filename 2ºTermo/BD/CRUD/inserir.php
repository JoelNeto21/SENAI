<title>Salvar</title>
<link rel="stylesheet" href="style.css">

<?php
$conn = new mysqli('localhost', 'root', 'senaisp', 'aula');

$nome = $_POST['nome'];
$email = $_POST['email'];

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO Usuario (nome, email) VALUES ('$nome', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "<span style='color: green;'>Dados salvos com sucesso ✓</span>";
    echo "<br><a href='listar.php'><button type='button'>Exibir</button></a>";
} else {
    echo "Erro: " . $conn->error;
}

exit;
$conn->close();
?>