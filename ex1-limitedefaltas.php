<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limite de faltas</title>
</head>
<body>
<h1>Limite de faltas</h1>
<hr>

<h2>Usando echo:</h2>
<?php
    

    $nome = "Veronica"; //define("NOME", "Veronica") ou const NOME = "Veronica"
    $curso = "Técnico em informática para a internet";
    date_default_timezone_set("America/Sao_Paulo");//usar o padrão local de timezone
    $data = date('d/m/Y H:i'); //data e hora do servidor
    $carga = 1000;
    $faltas = $carga * 0.25;

        echo "<p> Eu sou a $nome e estou fazendo o curso $curso em $data com total de $carga horas de duração e limite de faltas de $faltas horas</p>";

        //ou       
?>

<h2>Usando a forma simplificada:</h2>

        <p>Nome: <?=$nome?></p>
        <p>Curso: <?=$curso?></p>
        <p>Data: <?=$data?></p>
        <p>Esse curso tem: <?=$carga?> horas, e seu limite de faltas é de: <?=$faltas?> horas.</p>
</body>
</html>