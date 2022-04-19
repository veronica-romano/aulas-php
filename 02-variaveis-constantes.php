<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php $cor = "purple";?>
        p{
            color: <?= $cor ?> ;
        }
    </style>
    <title>Manipulando dados</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
    <?php
    $curso = "Técnico em informática para a internet";
    $ano = 2022;
    $valor = 2500.45;

    echo "<h2>Saídas de dados</h2>";
    echo "<p> $curso </p>";
    echo "<p> $ano </p>";
    echo "<p> $valor </p>";

    echo "<p>Estamos fazendo o curso $curso no ano de $ano </p>"
    ?>

    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p> <?php echo $curso ?> </p>
    <p> <?= $curso ?> </p>

    <p>Estamos fazendo o curso <?= $curso ?> no ano de <?= $ano?> </p>

    <?php
        define("MEU_NOME", "Veronica");
        const ESCOLA = "Senac";
    ?>

    <p>Olá, me chamo <?= MEU_NOME ?></p>
    <P>Estamos estudando no <strong> <?= ESCOLA ?> </strong></P>
</body>
</html>