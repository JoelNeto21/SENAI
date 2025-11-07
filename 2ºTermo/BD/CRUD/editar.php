<title>Editar</title>
<link rel="stylesheet" href="style.css">
<h2><span style="font-size: 45px;">✏️</span><br>Editar Usuário</h2>

<?php
$conn = new mysqli('localhost', 'root', 'senaisp', 'aula');

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM Usuario WHERE id = $id");
$row = $result->fetch_assoc();
?>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
    <br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    <br>
    <div class="btn">
        <button type="submit">Atualizar</button>
        <a href='listar.php'><button type='button' id="btn-list" name="btn-list">Voltar</button></a>
    </div>
</form>