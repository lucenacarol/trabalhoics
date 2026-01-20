<?php
include('../header.php');
include('../connection.php');
?>
<body>
    <a href="../index.php">< Voltar</a><br><br>

    <h1 class="page-header">
        CRUD de Categorias
    </h1>
    <h2>Lista de Categorias</h2>
    <br>
    <a href="add.php">Adicionar Categoria (CREATE)</a>
    <br/><br/>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM Categoria";
            $result = mysqli_query($db, $query) or die(mysqli_error($db));

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>';
                        echo '<a href="edit.php?id=' . $row['id'] . '"> Editar (UPDATE)</a><br/>';
			echo '<a class="delete" href="remove.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Tem certeza que deseja excluir esta categoria?\');">Remover (DELETE)</a>';
                    echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>

