<?php
include("../infra/conexao.php");

$id = $_GET["id"] ?? 0;

$query = "DELETE FROM produto WHERE id=?";

$comando = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($comando, "i", $id);

if (!mysqli_stmt_execute($comando)) {
    echo "<script>alert('Erro ao excluir o produto.'); window.history.back();</script>";
    exit();
}

header("Location: ../index.php");
exit();
?>