<?php
include('../header.php');
include('../connection.php');
?>

<h2>Adicionar Categoria</h2>

<form method="post" action="add_post.php">
    <input name="nome" placeholder="Nome da categoria"><br><br>
    <button type="submit">Salvar</button>
    <a href="index.php">Voltar</a>
</form>

