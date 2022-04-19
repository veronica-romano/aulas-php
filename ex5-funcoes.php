<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex5-funcoes.css">
    <title>exercício de funções</title>
</head>
<body>
    <h1>Exercício 5 - Funções</h1>
    <p>- Crie duas variáveis para representar as notas de um aluno.</p>
    <p>- Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado).</p>
    <p>**Desafio:** use funções para isolar a lógica de cálculo da média e verificação da situação do aluno.</p>
   <section>
    <?php
    function verificarNota($nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;
        return $media;
       
    }
?>
<div>
 <h4>Média: </h4>
<p><?=verificarNota(5,7)?></p>
</div>
<?php
    function verificarSituacao($nota1, $nota2){
        // $media = ($nota1 + $nota2) / 2;
        $media = verificarNota($nota1,$nota2);
            if ($media < 6){
        echo "<p class='rep'> Reprovado</p>";
   } else {
         echo "<p class='ap'> Aprovado</p>";
     } 
    }
    ?>
    
    <div>
   <h4>Situação: </h4>
<p><?=verificarSituacao(5,7)?></p> 
</div>  
</section>
</body>
</html>