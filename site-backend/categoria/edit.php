<?php
include('../header.php');
include('../connection.php');

$id = $_GET['id'];
$query = "SELECT * FROM Categoria WHERE id=$id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
?>

<h2>Editar Categoria</h2>

<form method="post" action="edit_post.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <input name="nome" value="<?= $row['nome'] ?>"><br><br>
    <button type="submit">Atualizar</button>
    <a href="index.php">Voltar</a>
</form>
