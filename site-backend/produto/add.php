<?php
include('../header.php');
include('../connection.php');
?>

<h2>Adicionar Produto</h2>

<form method="post" action="add_post.php">
    <input name="nome" placeholder="Nome"><br><br>
    <input name="preco" placeholder="Preço"><br><br>
    <input name="estoque" placeholder="Estoque"><br><br>

    <select name="id_categoria">
        <?php
        $cat = mysqli_query($db, "SELECT * FROM Categoria");
        while ($c = mysqli_fetch_assoc($cat)) {
            echo "<option value='{$c['id']}'>{$c['nome']}</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Salvar</button>
    <a href="index.php">Voltar</a>
</form>

