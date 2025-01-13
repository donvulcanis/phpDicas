<?php
//Arquivo de configuração do PDO para conectar o banco de dados

$host = $_SERVER['DB_HOST'];
$user = $_SERVER['DB_USER'];
$pass = $_SERVER['DB_PASS'];
$data = $_SERVER['DB_DATA'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$data", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $msg = "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
