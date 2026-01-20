<?php
include('../connection.php');

$id = $_GET['id'];

$query = "DELETE FROM Produto WHERE id=$id";
mysqli_query($db, $query);
?>

<script>
alert("Produto removido!");
window.location="index.php";
</script>

