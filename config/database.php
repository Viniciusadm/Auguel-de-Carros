<?php
$hostname ="localhost";
$banco = "aluguel";
$usuario = "vinicius";
$senha = "123";

global $pdo;

try {
    $pdo = new PDO("mysql:host=" . $hostname . ";dbname=" . $banco, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro) {
    echo "Erro: " . $erro->getMessage();
    exit;
}