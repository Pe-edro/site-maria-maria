<?php
header('Content-Type: application/json');
require_once 'conexao.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = isset($data['id']) ? intval($data['id']) : null;

if ($id) {
    $sql = "DELETE FROM eventos WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["sucesso" => true]);
    } else {
        echo json_encode(["sucesso" => false, "erro" => $conn->error]);
    }
} else {
    echo json_encode(["sucesso" => false, "erro" => "ID inválido"]);
}

$conn->close();
?>