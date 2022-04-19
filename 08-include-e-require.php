<!--recomendado incluir antes do doctype-->
<?php include "08pt2-recursos.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Require</title>
</head>
<body>
    <h1>Inclusão de recursos</h1>
    <hr>
    <!--recomendado incluir antes do doctype < ?php include "08pt2-recursos.php";?>  -->

    <h2><?=ESCOLA?></h2>
    <P>Estamos fazendo o curso de <?=$curso?></P>
    <ul>
        <?php
            foreach($tecnologias as $tecnologia){
             ?>
             <li><?=$tecnologia?></li>
             <?php   
            }
        ?>
    </ul>
    <p>O aluno Chapolin tem 25 anos e é <?=verificaIdade(25)?> de idade.</p>
    <article>
        <h2>lorem</h2>
        <?php include "textos.php"?>
    </article>
    <article>
        <h2>Require</h2>
        <p>Para recursos essenciais, dá erro fatal e a página não executa.é preferível usar require_once</p>
    </article>
</body>
</html>