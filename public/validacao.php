<?php
if ($preco <= 0) {
    echo "<script>alert('Erro: O preço não pode ser 0 ou negativo.'); window.history.back();</script>";
    exit();
}

if ($quantidade <= 0) {
    echo "<script>alert('Erro: A quantidade não pode ser 0 ou negativa.'); window.history.back();</script>";
    exit();
}
if (empty($data_validade)) {
    echo "<script>alert('Erro: A data de validade é obrigatória.'); window.history.back();</script>";
    exit();
}
if (empty(trim($nome))) {
    echo "<script>alert('Erro: O nome é obrigatório.'); window.history.back();</script>";
    exit();
}
?>
?>