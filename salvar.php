<?php

require_once "conexao.php";

$nome = trim($_POST["nome"] ?? "");
$categoria = trim($_POST["categoria"] ?? "");
$descricao = trim($_POST["descricao"] ?? "");
$preco = $_POST["preco"] ?? "";
$quantidade = $_POST["quantidade"] ?? "";
$validade = $_POST["validade"] ?? "";

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

$sql = "INSERT INTO produtos 
        (nome, categoria, descricao, preco, quantidade, validade)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

$stmt->bind_param(
    "sssdis",
    $nome,
    $categoria,
    $descricao,
    $preco,
    $quantidade,
    $validade
);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

die("Erro ao cadastrar produto.");
?>