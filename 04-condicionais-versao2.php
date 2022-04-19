<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecondicionais.css">
    <title>Estruturas de controle condicional</title>
</head>
<body>
<h2>Simples</h2>
<hr>
<h3></h3>
    <?php
    $numero = 5;
        if($numero > 1){
    ?>
            <p><?= $numero?> é maior que 1</p>
    <?php
        }
        ?>

       
    <h2>Composta</h2>
    <hr>
    <?php
    // produtos em estoque
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0;
    $qtdCritica = 14;
    if($qtdEmEstoque < $qtdCritica){
        ?>
        <p class='repor'>É necessário comprar <?= $produto?></p>
 
        <?php
        //condicional aninhada
    if($qtdEmEstoque === 0){
        ?>
        <p><mark>URGENTE!</mark></p>
        <?php
    }
    } else{

        ?>
        <p class='ok'> Estoque de <?= $produto?> ok</p>
        <?php 
    }
    ?>


    <h2>Encadeada</h2>
    <hr>
    <?php
    //Cardápio digital
    $opcao = 2;
    if($opcao === 1){
        $opcaoEscolhida = "Pastel";
    } elseif($opcao === 2){
        $opcaoEscolhida = "Pizza";
    } elseif($opcao === 3){
        $opcaoEscolhida = "Esfiha";
    } else{
        $opcaoEscolhida = "Opção inválida!";
    }
    ?>

        <p><?= $opcaoEscolhida?></p>

<h2>Switch case</h2>

   <?php
   switch ($opcao){
       case 1: $pedido = "Pastel"; break;
       case 2: $pedido = "Pizza"; break;
       case 3: $pedido = "Esfiha"; break;
       default: $pedido = "Opção Inválida"; break;
   }
   ?>
   <p><?= $pedido?></p>



    
</body>
</html>