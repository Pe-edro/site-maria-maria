<?php
$host = "sql207.infinityfree.com"; // Seu Host MySQL no InfinityFree
$usuario = "if0_41364343";        // Seu Usuário MySQL
$senha = "kIMukHpFpvLEf1w";           // Sua Senha do Banco
$banco = "if0_41364343_db_mariamaria";       // Nome do Banco de Dados

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die(json_encode(["sucesso" => false, "erro" => "Falha na conexão: " . $conn->connect_error]));
}

$conn->set_charset("utf8mb4");
?>