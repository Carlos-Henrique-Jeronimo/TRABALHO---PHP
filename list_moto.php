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
          
             while ($motos = mysqli_fetch_assoc($listarSQLm)) {
                   
        ?>
        <div >
            <div>
                <p ><?php echo $motos['marca_moto'] ?></p>
            </div>
            <div>
                <p>
                <?php echo $motos['modelo_moto'] ?>   
            </p>
            </div>
            <div>
                <p class="font-bold"><?php echo $motos['ano_moto'] ?></p>
            </div>
            <div>
                <p class="font-bold"><?php echo $motos['quantity'] ?></p>
            </div>
            <div>
            <a href="delete_moto.php?id_moto=<?php echo $motos['id_moto']; ?>">Excluir</a>
            <a href="update_moto.php?id_moto=<?php echo $motos['id_moto']; ?>">Atualizar</a>
            </div>
        </div>
        <?php   
             }   
       ?>
       
    </main>
</body>
</html>