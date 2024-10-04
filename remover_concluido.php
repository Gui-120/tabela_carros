<?php
$codigo = $_POST['codigo'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "carros";
$conexao = mysqli_connect($host, $user, $pass, $base);

// Remove o carro com o ID especificado
$resultadoDelete = mysqli_query($conexao, "DELETE FROM carros WHERE id_car='$codigo'");

if ($resultadoDelete) {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remoção de Carros</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Remoção de Carros</h1>
        <div class="success-message">CARRO REMOVIDO COM SUCESSO</div>
    </body>
    </html>';
} else {
    echo '<div class="error-message">ERRO AO REMOVER CARRO: ' . mysqli_error($conexao) . '</div>';
}

mysqli_close($conexao);
?>
