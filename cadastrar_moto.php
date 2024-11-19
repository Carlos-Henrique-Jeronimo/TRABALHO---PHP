<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar moto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <form action="salvar_moto.php" method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Cadastrar Moto</h2>
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
            <button type="submit" class="px-4 py-2 bg-zinc-700 text-white rounded font-bold">Cadastrar</button>
        </div>
    </form>
</body>
</html>