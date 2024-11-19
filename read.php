<?php

include 'connection.php';

$listarSQLc = mysqli_query($connectionBD, "SELECT * FROM carros");
$listarSQLm = mysqli_query($connectionBD, "SELECT * FROM motos");



?>