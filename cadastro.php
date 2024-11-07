<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="funcoes.php" method="post">
        <label for="">Id:</label>
        <input type="number" name="id"> <br>
        <label for="">Nome:</label>
        <input type="text" name="nome"><br>
        <label for="">Preço:</label>
        <input type="text" name="preco"> <br>
        <label for="">Descrição:</label>
        <input type="text" name="descricao">
        <button name="cadastrar">Enviar</button>
    </form>
</body>
</html>