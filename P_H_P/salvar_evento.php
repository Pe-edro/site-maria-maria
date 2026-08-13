<?php
header('Content-Type: application/json');
require_once 'conexao.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(["sucesso" => false, "erro" => "Dados inválidos"]);
    exit;
}

$data_evento = $conn->real_escape_string($data['data_evento']);
$nome = $conn->real_escape_string($data['name']);
$tipo = $conn->real_escape_string($data['type']);
$convidados = !empty($data['guests']) ? intval($data['guests']) : 0;
$descricao = $conn->real_escape_string($data['description']);
$cronograma = $conn->real_escape_string($data['schedule']);
$cardapio = $conn->real_escape_string($data['menu']);
$bebidas = $conn->real_escape_string($data['drinks']);
$observacoes = $conn->real_escape_string($data['notes']);
$id = isset($data['id']) ? intval($data['id']) : null;

if ($id) {
    // Atualizar evento existente
    $sql = "UPDATE eventos SET 
            nome_cliente='$nome', tipo_evento='$tipo', num_convidados=$convidados, 
            descricao='$descricao', cronograma='$cronograma', cardapio='$cardapio', 
            bebidas='$bebidas', observacoes='$observacoes' 
            WHERE id=$id";
} else {
    // Inserir novo evento
    $sql = "INSERT INTO eventos (data_evento, nome_cliente, tipo_evento, num_convidados, descricao, cronograma, cardapio, bebidas, observacoes) 
            VALUES ('$data_evento', '$nome', '$tipo', $convidados, '$descricao', '$cronograma', '$cardapio', '$bebidas', '$observacoes')";
}

if ($conn->query($sql) === TRUE) {
    echo json_encode(["sucesso" => true]);
} else {
    echo json_encode(["sucesso" => false, "erro" => $conn->error]);
}

$conn->close();
?>