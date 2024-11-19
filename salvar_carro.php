<?php

include 'connection.php';
$marca = $_POST['marca_carro'];
$modelo = $_POST['modelo_carro'];
$ano = $_POST['ano_carro'];
$quantity = $_POST['quantity'];
$sql = mysqli_query($connectionBD, "INSERT INTO carros(marca_carro, modelo_carro, ano_carro, quantity) VALUES ('$marca', '$modelo','$ano','$quantity')");

if ($sql){
    header('Location: list_carro.php');

}


?>