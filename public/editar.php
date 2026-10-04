<?php
include("../infra/conexao.php");

$id = $_GET["id"] ?? 0;

$queryProduto = "SELECT p.id, p.nome, c.id AS categoria_id, c.descricao AS categoria, p.descricao, p.preco, p.quantidade, p.data_validade FROM produto p JOIN categoria c ON p.categoria_id = c.id WHERE p.id = ?";
$comandoProduto = mysqli_prepare($conexao, $queryProduto);
mysqli_stmt_bind_param($comandoProduto, "i", $id);
mysqli_stmt_execute($comandoProduto);
$resultadoProduto = mysqli_stmt_get_result($comandoProduto);

$produto = $resultadoProduto->fetch_assoc();

if (!$produto) {
    echo "<script>alert('Erro: Produto não encontrado.'); window.location.href='../index.php';</script>";
    exit();
}

$queryCategoria = "SELECT id, descricao FROM categoria WHERE id != ?";
$comandoCategoria = mysqli_prepare($conexao, $queryCategoria);
mysqli_stmt_bind_param($comandoCategoria, "i", $produto['categoria_id']);
mysqli_stmt_execute($comandoCategoria);
$resultadoCategoria = mysqli_stmt_get_result($comandoCategoria);
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

    <form action="../public/atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" class="input-padrao"
            required><br>

        <label for="categoria">Categoria:</label><br>
        <select name="categoria_id" id="categoria" class="input-padrao">
            <option value="<?php echo $produto['categoria_id']; ?>" selected><?php echo htmlspecialchars($produto['categoria']); ?>
            </option>
            <?php

            while ($categoria = $resultadoCategoria->fetch_assoc()) {
                echo "<option value='" . $categoria['id'] . "'>" . htmlspecialchars($categoria['descricao']) . "</option>";
            }
            ?>
        </select><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="30"
            class="input-padrao"><?php echo htmlspecialchars($produto['descricao']); ?></textarea><br>

        <label for="preco">Preço (R$):</label><br>
        <input type="number" step="0.01" id="preco" name="preco" value="<?php echo $produto['preco']; ?>"
            class="input-padrao" required><br>

        <label for="quantidade">Quantidade em Estoque:</label><br>
        <input type="number" id="quantidade" name="quantidade" value="<?php echo $produto['quantidade']; ?>"
            class="input-padrao" required><br>

        <label for="data_validade">Data de Validade:</label><br>
        <input type="date" id="data_validade" name="data_validade" value="<?php echo $produto['data_validade']; ?>"
            class="input-padrao" required><br><br>

        <button type="submit" class="btn-roxo">Salvar Alterações</button>
    </form>

</body>

</html>