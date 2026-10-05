<?php

$conexao = new mysqli("localhost", "root", "", "estoque_mercado");

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados.");
}

$conexao->set_charset("utf8mb4");
?>