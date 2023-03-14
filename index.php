<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <form action="controller.php" method="post">
        <p>
            <label>NOME</label>
            <input type="text" name="nome" autofocus required>
            <label>SENHA</label>
            <input type="password" name="senha" autofocus required>
            <input type="submit" value="LOGAR" name="botao">
            <p>
            <?php if (isset($_GET['erro']) && $_GET['erro'] == true) {
                echo 'USUARIO OU SENHA ERRADO SEU ANIMAL';
            } ?>
            </p>
        </p>
        <p>
            <a href="cadastro.php">CRIAR CONTA</a>
        </p>
    </form>
</body>

</html>