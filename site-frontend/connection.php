<?php
$db = mysqli_connect(
    '192.168.0.8',   // IP da VM Database
    'ifrn',          // usuário do banco
    '123456'         // senha
) or die('Erro ao conectar no MySQL');

mysqli_select_db($db, 'loja_db')
    or die('Erro ao selecionar o banco: ' . mysqli_error($db));
?>
