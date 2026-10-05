<?php

require_once "conexao.php";

$id = $_GET["id"] ?? 0;

if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
    die("ID inválido.");
}

$sql = "DELETE FROM produtos WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
}

die("Erro ao excluir produto.");
?>