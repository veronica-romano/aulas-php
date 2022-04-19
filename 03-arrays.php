<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays no php</title>
</head>
<body>
    <h1>Trabalhando com Arrays </h1>
    <h1>(vetores e matrizes)</h1>
    <hr>
    <h2>Arrays numéricos</h2>
    <h3>Usando colchetes</h3>
    
    <?php
        $bandas = ["Savatage", "Iron Maiden", "Nightwish"]; //mais recente
    ?>

<h3>Usando funções</h3>
    <?php
        $cursos = array("HTML5", "CSS", "NodeJS", "Photoshop");
    ?>

<h3>Usando índices</h3>
    <?php
        $comidaDeButeco[0] = "Bolinho de Bacalhau";
        $comidaDeButeco[1] = "Pastel";
        $comidaDeButeco[2] = "Esfiha de carne";
    ?>

<h3>Usando constantes de Arrays</h3>
    <?php
        define("UNIDADES_SENAC", ["Penha", "Tatuapé", "Itaquera"]);
        const FRUTAS = ["Morango", "Abacaxi"];
    ?>

    <h4>Acessando os dados</h4>
    <ol>
        <li>Uma das bandas que mais gosto: 
            <?=$bandas[2]?>
        </li>
        <li>Linguagem base da web <?=$cursos[0]?></li>
        <li>Quero comer: <?=$comidaDeButeco[0]?></li>
        <li>Senac <?=UNIDADES_SENAC[0]?></li>
        <li>Fruta: <?=FRUTAS[1]?></li>
    </ol>

    <h2>Arrays associativos</h2>
    <?php 
    $curso = [
        "nome" => "Gastronomia",
        "cargaHoraria" => 150,
        "unidade" => "Penha"
    ];
        ?>

        <p>Curso: <?=$curso["nome"]?></p>
        <p>Horas: <?=$curso["cargaHoraria"]?></p>
        <p>unidade: <?=$curso["unidade"]?></p>

    <h2>Array dentro de Array (Matriz)</h2>
    <?php
        //planos de estudos de frontend, backend e design
        $planoDeEstudos = 
        [
            //0                         1        2
            ["Javascript Avançado", "NodeJS", "React"], //0

            //0       1       2         3
            ["php", "POO", "MySQL", "Python"], //1

            //      0               1             2
            ["Teoria das cores", "Photoshop", "UX/UI"] //2
        ];
    ?>

    <ul>
        <li><?=$planoDeEstudos[0][2]?></li>
        <li><?=$planoDeEstudos[1][0]?>/<?=$planoDeEstudos[1][2]?></li>
        <li><?=$planoDeEstudos[2][1]?></li>
        <li><?=$planoDeEstudos[2][0]?></li>
    </ul>

    <h2>Análise de Arrays</h2>
 
        <h3>var_dump ()</h3>

<pre>    <?php   ///a tag pre organiza os arrays
        var_dump($bandas);
    ?></pre>
    //ou

    
    <pre> <?= var_dump($bandas) ?> </pre>


        <h3>print_r</h3>

<pre>    <?php
        print_r($bandas);
    ?></pre>

    //ou

    <pre><?= print_r($bandas) ?></pre>

    <pre><?= print_r($planoDeEstudos)?></pre>
</body>
</html>