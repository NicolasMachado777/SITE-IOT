<?php
require_once 'Dao.php';

$nomes = new Dao();
$lista = $nomes->Consultar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="img/iconpran.png" type="image/x-icon">
    <title>Lista</title>
    <style>
    </style>
</head>

<body>
    <a href="index.html" class="content">VOLTAR</a>
    <div class="nomes">
        <table>
            <thead>
                <h2 class="content">Nomes Cadastrados</h2>
            <tbody>
                <?php foreach ($lista as $tabela) : ?>
                    <tr>
                        <td class="content" id="id_rifa"><?php echo $tabela['id']; ?></td>
                        <td class="content"><?php echo $tabela['nome']; ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class="cursor"></div>
    <script src="js-mouse.js"></script>
</body>

</html>