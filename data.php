<?php
require_once 'connection.php';
$stmt = $conn->prepare('SELECT marca_carro, quantity FROM carros'); //consulta responsável por preencher os gráficos
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>