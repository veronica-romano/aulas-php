<?php 
$page =  basename ($_SERVER['PHP_SELF']);
switch($page){
    case 'index.php': $title = "Página Inicial";break;
    case 'produtos.php': $title = "Produtos";break;
    case 'servicos.php': $title = "Serviços";break;
    default: $title = "Contato";break;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesitephp.css">
    <title> <?=$title?>- Site PHP</title>
</head>
<body>
    <header>
        <h1>Web Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>
