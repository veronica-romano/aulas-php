<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body>
    <h1> Criando e usando funções   </h1>


    <h2>Funções como sub-rotina ou procedimentos</h2>
    <?php
    function dadosDoAutor(){
        echo "<div>";
        echo "<p> Veronica Lima </p>";
        echo "<p> veronica.veronica@veronica.com </p>";
        echo "</div>";
    }
    ?>
    <section>
        <h3>Chamada da sub-rotina</h3>
        <?=dadosDoAutor()?>
    </section>
    <article>
        <h4>Outra chamada</h4>
        <?=dadosDoAutor()?>
    </article>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso(){
        return "Técnico em informática para Internet";
    }
    ?>
    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ensinado no Senac Penha</p>

    <h2>Função com parâmetros (Argumentos)</h2>
    <?php
    //variável local, criada dentro da função. Ao contrário da global, que tem o escopo menos limitado
    function soma($valor1, $valor2, $valor3){ // Não é recomendado dar o mesmo nome pois não são variáveis, e sim parâmetros
        $total = $valor1 + $valor2 + $valor3;
        return $total; //só pode ser usada dentro da função pois é uma variável local
        
    }
    ?>
    <p><?=soma(10,20,30)?></p>
    <p><?=soma(100,200,300)?></p>
    <p><?=soma(1,2,3)?></p>
    
    <?=$total = soma(1500,200,125);?> 
    <p><?=$total?></p>

    <?php
    //return $valor < 0? "negativo" : "Não é negativo";
    function verificarNegativo($valor){
     if ($valor < 0){
          return "negativo";

     } else {
           return "não é negativo";
       } 
    }     
    ?>
    <p><?= verificarNegativo(10)?></p>
    <p><?= verificarNegativo(-150)?></p>
    <p><?= verificarNegativo(258.99)?></p>
    

    <h2>Funções anônimas (closure, lambda)</h2>
    <?php
    $formataPreço = function($valor){
        return "R$".number_format($valor, 2, ",", ".");
    };
    ?>
    <p><?= $formataPreço(1000)?></p>
    <p><?= $formataPreço(1500)?></p>
    <p><?= $formataPreço(1500.75)?></p>

    <h2>Indução de tipos</h2>
    <?php                 //valores de entrada  //valor de saída
    function calculaMedia(float $n1, float $n2):float{
        $media = ($n1 + $n2) / 2;
        return $media;
    }
    ?>
    <p><?=calculaMedia(9.5,8)?></p>
</body>
</html>