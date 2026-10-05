<?php

require_once "conexao.php";

$id = $_POST["id"] ?? 0;
$nome = trim($_POST["nome"] ?? "");
$categoria = trim($_POST["categoria"] ?? "");
$descricao = trim($_POST["descricao"] ?? "");
$preco = $_POST["preco"] ?? "";
$quantidade = $_POST["quantidade"] ?? "";
$validade = $_POST["validade"] ?? "";

if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
    die("ID inválido.");
}

if (
    $nome == "" ||
    $categoria == "" ||
    $preco == "" ||
    $quantidade == "" ||
    $validade == ""
) {
    die("Preencha todos os campos obrigatórios.");
}

if (!is_numeric($preco) || $preco < 0) {
    die("Preço inválido.");
}

if (!is_numeric($quantidade) || $quantidade < 0) {
    die("Quantidade inválida.");
}

$sql = "UPDATE produtos
        SET nome = ?,
            categoria = ?,
            descricao = ?,
            preco = ?,
            quantidade = ?,
            validade = ?
        WHERE id = ?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param(
    "sssdisi",
    $nome,
    $categoria,
    $descricao,
    $preco,
    $quantidade,
    $validade,
    $id
);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

die("Erro ao atualizar produto.");
?>