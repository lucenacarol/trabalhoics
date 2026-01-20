<?php
include('../connection.php');

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$id_categoria = $_POST['id_categoria'];

$query = "INSERT INTO Produto VALUES
(NULL,'$nome','$preco','$estoque','$id_categoria')";

mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Produto cadastrado!");
window.location="index.php";
</script>

