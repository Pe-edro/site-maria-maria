<?php
header('Content-Type: application/json');
require_once 'conexao.php';

$sql = "SELECT * FROM eventos ORDER BY id ASC";
$result = $conn->query($sql);

$eventos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data = $row['data_evento'];
        if (!isset($eventos[$data])) {
            $eventos[$data] = [];
        }
        $eventos[$data][] = [
            "id" => $row['id'],
            "name" => $row['nome_cliente'],
            "type" => $row['tipo_evento'],
            "guests" => $row['num_convidados'],
            "description" => $row['descricao'],
            "schedule" => $row['cronograma'],
            "menu" => $row['cardapio'],
            "drinks" => $row['bebidas'],
            "notes" => $row['observacoes']
        ];
    }
}

echo json_encode($eventos);
$conn->close();
?>