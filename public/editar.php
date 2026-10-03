<?php
include("../infra/conexao.php");

$id = $_GET["id"];

$queryProduto = "SELECT p.id, p.nome, c.id AS categoria_id, c.descricao AS categoria, p.descricao, p.preco, p.quantidade, p.data_validade FROM produto p JOIN categoria c ON p.categoria_id = c.id WHERE p.id = $id";
$resultadoProduto = $conexao->query($queryProduto);

$produto = $resultadoProduto->fetch_assoc();

$queryCategoria = "SELECT id, descricao FROM categoria WHERE id != " . $produto['categoria_id'];
$resultadoCategoria = $conexao->query($queryCategoria);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <h2>Editar Produto</h2>


</body>

</html>