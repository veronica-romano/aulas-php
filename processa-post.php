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
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
<h1>Processamento de dados usando $_POST</h1>
    <?php
    if(empty($_POST['nome']) || empty($_POST['email'])){ 
        ?>
        <p class="warning"> Você deve preencher nome e e-mail!</p>
     <?php
     } else {
    //CAPTURANDO OS DADOS:
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    /* coalescencia nula: Se houver interesses, armazene os valores, senão, deixe a alternativa à direita vazia */
    $interesses = filter_var_array($_POST ['interesses'] ?? [] , FILTER_SANITIZE_SPECIAL_CHARS);
    $informativos = filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        <li>Mensagem: <?=$mensagem?></li>
        <?php if(!empty($interesses)){?>
        <li>Interesses: <?=implode(", ", $interesses)?></li>
        <li>Interesses:
            <ul>
                <?php foreach($interesses as $interesse) {
                ?>
                <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <li>Informativos: <?=$informativos?></li>
    </ul>

    <?php } ?>
</body>
</html>