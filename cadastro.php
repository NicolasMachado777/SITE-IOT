<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <form action="Controller.php" method="post">
        <p>
            <label>NOME</label>
            <input type="text" name="nome" require autofocus>
            <label>SENHA</label>
            <input type="password" name="senha" require autofocus>
            <input type="submit" value="CADASTRAR" name="botao">
        </p>
    </form>
</body>
</html>