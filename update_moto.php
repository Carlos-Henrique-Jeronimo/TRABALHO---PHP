<?php
      include 'connection.php';

    if(isset($_GET['id_moto'])){
        $id = $_GET[ 'id_moto'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM motos WHERE id_moto = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $marca = $n['marca_moto'];
            $modelo = $n['modelo_moto'];
            $ano = $n['ano_moto'];
            $quantity = $n['quantity'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_moto"];
        $marca = $_POST["marca_moto"];
        $modelo = $_POST["modelo_moto"];
        $ano = $_POST["ano_moto"];
        $quantity = $_POST["quantity"];
        

        $queryUpdate = "UPDATE motos SET marca_moto = '$marca', modelo_moto = '$modelo', ano_moto = '$ano', quantity = '$quantity' WHERE id_moto = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: list_moto.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar moto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <form  method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Atualizar Moto</h2>
        </div>
        <div>
            <input type="text" placeholder="Marca da moto" class="w-50 px-4 py-2 border border-1 border-black rounded" name="marca_moto">
        </div>
        <div>
            <input type="text" placeholder="Modelo da moto" class="w-50 px-4 py-2 border border-1 border-black rounded" name="modelo_moto">
        </div>
        <div>
            <input type="date" placeholder="Ano da moto" class="w-50 px-4 py-2 border border-1 border-black rounded" name="ano_moto">
        </div>
        <div>
            <input type="number" placeholder="Quantidade" class="w-50 px-4 py-2 border border-1 border-black rounded" name="quantity">
        </div>
        <div>
            <button name="atualizar" type="submit" class="px-4 py-2 bg-zinc-700 text-white rounded font-bold">Atualizar</button>
        </div>
    </form>
</body>
</html>