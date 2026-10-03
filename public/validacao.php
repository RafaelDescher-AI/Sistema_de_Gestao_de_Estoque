<?php
if ($preco <= 0) {
    echo "<script>alert('Erro: O preço não pode ser 0 ou negativo.'); window.history.back();</script>";
    exit();
}

if ($quantidade <= 0) {
    echo "<script>alert('Erro: A quantidade não pode ser 0 ou negativa.'); window.history.back();</script>";
    exit();
}

?>