<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar carro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: Arial }</style>
</head>
<body>
    <form action="salvar_carro.php" method="post" class="h-screen flex flex-col items-center justify-center gap-4">
        <div>
            <h2 class="text-3xl font-bold">Cadastrar carro</h2>
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
            <button type="submit" class="px-4 py-2 bg-zinc-700 text-white rounded font-bold">Cadastrar</button>
        </div>
    </form>
</body>
</html>