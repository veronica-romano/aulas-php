<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex7-form.css">
    <title>Document</title>
</head>
<body>
<?php
    if(empty($_POST['nome']) || empty($_POST['preco'])){ 
        ?>
        <p class="warning"> Você deve preencher nome do produto e preço!</p>
     <?php
     } else {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    //as opções desta lista devem ser carregadas a partir dos dados de um array PHP com os nomes dos fabricantes
    $fabricantes = filter_input(INPUT_POST, "fabricantes", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $desc = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <h2>Saída de dados:</h2>
    <ul>
    <li>Nome: <?=$nome?></li>
    <li>Fabricante: <?=$fabricantes?></li>
    <li>Preço: <?= number_format($preco, 2, ',', '.')?></li>
    <li>Descrição: <?=nl2br($desc)?></li>
    </ul>
    <?php } ?>
</body>
</html>