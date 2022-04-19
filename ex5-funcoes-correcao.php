<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex5-funcoes.css">
    <title>exercício de funções - correção</title>
</head>
<body>
<h1>Exercício 5 - Resolvido</h1>
<p>- Crie duas variáveis para representar as notas de um aluno.</p>
    <p>- Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado).</p>
    <p>**Desafio:** use funções para isolar a lógica de cálculo da média e verificação da situação do aluno.</p>
<?php
$nota1 = 7;
$nota2 = 0;
function calculaMedia($nota1, $nota2){
    $media = ($nota1 + $nota2) /2;
    return $media;
    //ou return ($nota1 + $nota2) /2;
}
$media = calculaMedia($nota1, $nota2);
function verificaSituacao($media){
    if($media >= 7){
        return "aprovado";
    } else{
        return "reprovado";
    }
}
?>
<p>Média: <?=calculaMedia($nota1,$nota2,)?></p>

<p>Situação: <?=verificaSituacao($media)?></p>
</body>
</html>