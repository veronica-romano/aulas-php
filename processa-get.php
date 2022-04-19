<?php
//method="get" vira um parâmetro de url
//Array super global:
//echo "<pre>";
//var_dump($_GET);
//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Processamento de dados usando GET</h1>
    <?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
</body>
</html>