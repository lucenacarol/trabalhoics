<?php
include('../header.php');
include('../connection.php');
?>
<body>
    <a href="../index.php">< Voltar</a><br><br>
    <h1 class="page-header">
        CRUD de Produtos
    </h1>
    
    <h2>Lista de Produtos</h2>
    <br/>
    <a href="add.php">Adicionar Produto (CREATE)</a>
    <br/><br/>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Categoria</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "
                SELECT 
                    Produto.id,
                    Produto.nome,
                    Produto.preco,
                    Produto.estoque,
                    Categoria.nome AS categoria
                FROM Produto
                LEFT JOIN Categoria
                    ON Produto.id_categoria = Categoria.id
            ";

            $result = mysqli_query($db, $query) or die(mysqli_error($db));

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>' . $row['preco'] . '</td>';
                    echo '<td>' . $row['estoque'] . '</td>';
                    echo '<td>' . $row['categoria'] . '</td>';
                    echo '<td>';
                        echo '<a href="edit.php?id=' . $row['id'] . '">Editar (UPDATE)</a><br/>';
                        echo '<a class="delete" href="remove.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Tem certeza que deseja excluir este produto?\');">Remover (DELETE)</a>';
                    echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>

