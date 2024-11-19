<?php
      include 'connection.php';

    if(isset($_GET['id_carro'])){
        $id = $_GET[ 'id_carro'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM carros WHERE id_carro = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $marca = $n['marca_carro'];
            $modelo = $n['modelo_carro'];
            $ano = $n['ano_carro'];
            $quantity = $n['quantity'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_carro"];
        $marca = $_POST["marca_carro"];
        $modelo = $_POST["modelo_carro"];
        $ano = $_POST["ano_carro"];
        $quantity = $_POST["quantity"];
        

        $queryUpdate = "UPDATE carros SET marca_carro = '$marca', modelo_carro = '$modelo', ano_carro = '$ano', quantity = '$quantity' WHERE id_carro = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: list_carro.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar carro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <form method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Atualizar carro</h2>
        </div>
        <div>
            <input type="text" placeholder="Marca do carro" class="w-50 px-4 py-2 border border-1 border-black rounded" name="marca_carro">
        </div>
        <div>
            <input type="text" placeholder="Modelo do carro" class="w-50 px-4 py-2 border border-1 border-black rounded" name="modelo_carro">
        </div>
        <div>
            <input type="date" placeholder="Ano do carro" class="w-50 px-4 py-2 border border-1 border-black rounded" name="ano_carro">
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