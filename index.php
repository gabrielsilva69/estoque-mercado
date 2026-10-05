<?php
require_once "conexao.php";

$sql = "SELECT * FROM produtos ORDER BY id DESC";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estoque do Mercado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Estoque do Mercado</h1>

<a href="cadastrar.php">Cadastrar Produto</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Validade</th>
        <th>Ações</th>
    </tr>

    <?php while ($produto = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $produto["id"] ?></td>
            <td><?= htmlspecialchars($produto["nome"]) ?></td>
            <td><?= htmlspecialchars($produto["categoria"]) ?></td>
            <td><?= htmlspecialchars($produto["descricao"]) ?></td>
            <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
            <td><?= $produto["quantidade"] ?></td>
            <td><?= date("d/m/Y", strtotime($produto["validade"])) ?></td>
            <td>
                <a href="editar.php?id=<?= $produto["id"] ?>">Editar</a>
                |
                <a href="excluir.php?id=<?= $produto["id"] ?>"
                   onclick="return confirm('Deseja realmente excluir este produto?')">
                    Excluir
                </a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>