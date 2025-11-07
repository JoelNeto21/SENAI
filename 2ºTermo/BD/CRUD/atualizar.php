<title>Atualizar</title>
<link rel="stylesheet" href="style.css">

<?php
$conn = new mysqli('localhost', 'root', 'senaisp', 'aula');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE Usuario SET nome='$nome', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<span style='color: green;'>Dados atualizados com sucesso ✓</span>";
    echo "<br><a href='index.html'><button type='button'>Voltar</button></a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>