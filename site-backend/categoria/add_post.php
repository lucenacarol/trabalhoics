<?php
include('../connection.php');

$nome = $_POST['nome'];

$query = "INSERT INTO Categoria VALUES (NULL, '$nome')";
mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Categoria adicionada!");
window.location="index.php";
</script>

