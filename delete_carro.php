<?php 
include 'connection.php';
$id = $_GET["id_carro"];

if(isset($_GET['id_carro'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM carros WHERE id_carro = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: list_carro.php');
}
?>