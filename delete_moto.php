<?php 
include 'connection.php';
$id = $_GET["id_moto"];

if(isset($_GET['id_moto'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM motos WHERE id_moto = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: list_moto.php');
}
?>