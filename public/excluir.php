<?php
include("../infra/conexao.php");

$id = $_GET["id"];

$query = "DELETE FROM produto WHERE id=?";

$comando = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($comando, "i", $id);
mysqli_stmt_execute($comando);

header("Location: ../index.php");
?>