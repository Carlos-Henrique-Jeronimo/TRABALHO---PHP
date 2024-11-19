<?php
include 'connection.php';
include 'read.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        
            <a href="index.php">Volte ao início</a> <!--Bota uma casinha do home -->
    
    </header>
<main class="h-full flex items-center justify-center mt-6">
    <?php

            while ($carros = mysqli_fetch_assoc($listarSQLc)) {
            
            ?>
        <div class="card w-96 p-8 bg-zinc-300 flex flex-col gap-4">
            <div>
                <p><?php echo $carros['marca_carro'] ?></p>
            </div>
            <div>
                <p>
                <?php echo $carros['modelo_carro'] ?>   
            </p>
            </div>
            <div>
                <p>
                <?php echo $carros['ano_carro'] ?>   
            </p>
            </div>
            <div>
                <p>
                <?php echo $carros['quantity'] ?>   
            </p>
            </div>
            
            <div>
            <a href="delete_carro.php?id_carro=<?php echo $carros['id_carro']; ?>">Excluir</a>
            <a href="update_carro.php?id_carro=<?php echo $carros['id_carro']; ?>">Atualizar</a>
            </div>
       
        </div>
    </div> 
                <?php
            }
          
                ?>
       
</main>
</body>
</html>