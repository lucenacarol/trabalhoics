<?php
include('../header.php');
include('../connection.php');

$id = $_GET['id'];

$query = "SELECT * FROM Produto WHERE id=$id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
?>

<h2>Editar Produto</h2>

<form method="post" action="edit_post.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <input name="nome" value="<?= $row['nome'] ?>"><br><br>
    <input name="preco" value="<?= $row['preco'] ?>"><br><br>
    <input name="estoque" value="<?= $row['estoque'] ?>"><br><br>

    <select name="id_categoria">
        <?php
        $cats = mysqli_query($db, "SELECT * FROM Categoria");
        while ($c = mysqli_fetch_assoc($cats)) {
            $sel = ($c['id'] == $row['id_categoria']) ? 'selected' : '';
            echo "<option value='{$c['id']}' $sel>{$c['nome']}</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Atualizar</button>
    <a href="index.php">Voltar</a>
</form>

