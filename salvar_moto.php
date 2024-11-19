<?php

include 'connection.php';
$marca = $_POST['marca_moto'];
$modelo = $_POST['modelo_moto'];
$ano = $_POST['ano_moto'];
$quantity = $_POST['quantity'];
$sql = mysqli_query($connectionBD, "INSERT INTO motos(marca_moto, modelo_moto, ano_moto, quantiy) VALUES ('$marca', '$modelo','$ano','$quantity')");

if ($sql){
    header('Location: list_moto.php');

}


?>