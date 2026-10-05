<?php

require_once "conexao.php";

$id = $_GET["id"] ?? 0;

if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
    die("ID inválido.");
}

$sql = "SELECT * FROM produtos WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {
    die("Produto não encontrado.");
}

$produto = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>

<h1>Editar Produto</h1>

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?= $produto["id"] ?>">

    <label>Nome:</label>
    <input type="text" name="nome"
           value="<?= htmlspecialchars($produto["nome"]) ?>" required>

    <br><br>

    <label>Categoria:</label>
    <input type="text" name="categoria"
           value="<?= htmlspecialchars($produto["categoria"]) ?>" required>

    <br><br>

    <label>Descrição:</label>
    <textarea name="descricao"><?= htmlspecialchars($produto["descricao"]) ?></textarea>

    <br><br>

    <label>Preço:</label>
    <input type="number" name="preco" step="0.01" min="0"
           value="<?= $produto["preco"] ?>" required>

    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" min="0"
           value="<?= $produto["quantidade"] ?>" required>

    <br><br>

    <label>Validade:</label>
    <input type="date" name="validade"
           value="<?= $produto["validade"] ?>" required>

    <br><br>

    <button type="submit">Atualizar</button>
</form>

<br>

<a href="index.php">Voltar</a>

</body>
</html>