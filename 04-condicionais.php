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
            echo "<p>A variável informada é maior que 1</p>";
        }
        //Ou, omitindo as chaves
        if($numero > 1) echo "<p>$numero é maior que 1</p>"
        ?>
    <h2>Composta</h2>
    <hr>
    <?php
    // produtos em estoque
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 20;
    $qtdCritica = 14;
    if($qtdEmEstoque < $qtdCritica){
        echo "<p class='repor'>É necessário comprar $produto</p>";
        //ou echo "<p class=\"repor\">É necessário comprar $produto</p>";

        //condicional aninhada
    if($qtdEmEstoque === 0){
        echo "<p><mark>URGENTE!</mark></p>";
    }
    } else{
        echo "<p class='ok'> Estoque de $produto ok</p>";
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
    echo "<p>$opcaoEscolhida</p>";
    ?>

<h2>Switch case</h2>

   <?php
   switch ($opcao){
       case 1: $pedido = "Pastel"; break;
       case 2: $pedido = "Pizza"; break;
       case 3: $pedido = "Esfiha"; break;
       default: $pedido = "Opção Inválida"; break;
   }
   echo "<p>$pedido</p>";
?>


    
</body>
</html>