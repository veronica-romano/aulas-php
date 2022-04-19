<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex2-arrays.css">
    <title>Arrays</title>
</head>
<body>
<?php
    const EVANDRO = ["Evandro", 30, "Masculino", "São Paulo", "evandro@evandro.com", "admin123"];
    const VERONICA = ["Veronica", 28, "Feminino", "São Paulo", "veronica@veronica.com", "123abc"];
?>
<h1>Dados de usuário</h1>
<hr>
<main>
<section>
    <h2>Nome: <?=EVANDRO[0]?></h2>
    <ul>
        <li>Idade: <?=EVANDRO[1]?></li>
        <li>sexo: <?=EVANDRO[2]?></li>
        <li>Cidade: <?=EVANDRO[3]?></li>
        <li>E-mail: <?=EVANDRO[4]?></li>
       
    </ul>
</section>
<section>
    <h2>Nome: <?=VERONICA[0]?></h2>
    <ul>
        <li>Idade: <?=VERONICA[1]?></li>
        <li>sexo: <?=VERONICA[2]?></li>
        <li>Cidade: <?=VERONICA[3]?></li>
        <li>E-mail: <?=VERONICA[4]?></li>
        
    </ul>
</section>
</main>
</body>
</html>