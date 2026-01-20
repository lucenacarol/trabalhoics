<?php
include('../connection.php');

$id = $_POST['id'];
$nome = $_POST['nome'];

$query = "UPDATE Categoria SET nome='$nome' WHERE id=$id";
mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
alert("Categoria atualizada!");
window.location="index.php";
</script>

