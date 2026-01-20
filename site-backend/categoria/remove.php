<?php
include('../connection.php');

if (!isset($_GET['id'])) {
    die('ID não informado');
}

$id = $_GET['id'];

// Verifica se existem produtos nessa categoria
$check = mysqli_query(
    $db,
    "SELECT COUNT(*) AS total FROM Produto WHERE id_categoria = $id"
) or die(mysqli_error($db));

$data = mysqli_fetch_assoc($check);

if ($data['total'] > 0) {
    ?>
    <script>
        alert("Não é possível excluir esta categoria.\nExistem produtos vinculados a ela.");
        window.location = "index.php";
    </script>
    <?php
    exit;
}

// Se não tiver produtos, pode excluir
$query = "DELETE FROM Categoria WHERE id = $id";
mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script>
    alert("Categoria removida com sucesso!");
    window.location = "index.php";
</script>

