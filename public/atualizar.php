<?php
include("../infra/conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria_id = $_POST["categoria_id"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$data_validade = $_POST["data_validade"];

include("../public/validacao.php");

$query = "UPDATE produto SET nome=?, categoria_id=?, descricao=?, preco=?, quantidade=?, data_validade=? WHERE id=?";

$comando = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($comando, "sisdisi", $nome, $categoria_id, $descricao, $preco, $quantidade, $data_validade, $id);

if (!mysqli_stmt_execute($comando)) {
    echo "<script>alert('Erro ao atualizar o produto.'); window.history.back();</script>";
    exit();
}

header("Location: ../index.php");
exit();
?>