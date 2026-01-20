<?php
include('header.php');
include('connection.php');
?>

<div class="container mt-4">

    <h1 class="titulo-loja text-center">Loja Lucena 🛒</h1>
    <p class="slogan text-center">
        O mercadinho da sua vizinhança, vejo Lucê na esquina!
    </p>

    <hr>

    <div class="row">
        <?php
        $query = "
            SELECT 
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
        ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm card-produto">

                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <?php echo $row['nome']; ?>
                        </h5>

                        <p class="categoria">
                            <?php echo $row['categoria']; ?>
                        </p>

                        <p class="preco">
                            R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?>
                        </p>

                        <?php if ($row['estoque'] > 0) { ?>
                            <span class="badge bg-success">Em estoque</span>
                        <?php } else { ?>
                            <span class="badge bg-danger">Indisponível</span>
                        <?php } ?>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>

</div>

