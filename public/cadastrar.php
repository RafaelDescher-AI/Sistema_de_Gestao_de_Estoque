<?php
include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["categoria_id"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$data_validade = $_POST["data_validade"];

include("../public/validacao.php");

$query = "INSERT INTO produto (nome, categoria_id, descricao, preco, quantidade, data_validade) VALUES (?, ?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($comando, "sisdis", $nome, $categoria, $descricao, $preco, $quantidade, $data_validade);

if (!mysqli_stmt_execute($comando)) {
    echo "<script>alert('Erro ao cadastrar o produto.'); window.history.back();</script>";
    exit();
}

header("Location: ../index.php");
exit();
?>