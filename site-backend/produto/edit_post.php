<?php
include('../connection.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$id_categoria = $_POST['id_categoria'];

$query = "
UPDATE Produto SET
nome='$nome',
preco='$preco',
estoque='$estoque',
id_categoria='$id_categoria'
WHERE id=$id
";

mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Produto atualizado!");
window.location="index.php";
</script>

