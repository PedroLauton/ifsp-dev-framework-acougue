<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
</head>
<body>
    <form action="../model/inserirProduto.php" method="POST">
        Nome:
        <input type="text" name="cxNome" required><br><br>
        Preço unitário:
        <input type="number" name="cxPreco" required><br><br>
        Porção unitária:
        <input type="number" name="cxPorcao" required><br><br>
        Categoria:
            <select id="categoria" name="cxCategoria">
                <option value="1">Aves</option>
                <option value="2">Carne bovina</option>
                <option value="3">Carne suína</option>
                <option value="4">Frutos do mar</option>
                <option value="5">Queijos</option>
            </select><br><br>
        Fornecedor:
            <select id="produto" name="cxProduto">
                <option value="1">LeiteAutêntico</option>
                <option value="2">FazuelleCortes</option>
                <option value="3">Fogonoboi</option>
            </select><br><br>
        Foto:
        <input type="file" name="cxFoto" required><br><br>
        <button>Enviar</button>
    </form>
</body>
</html>