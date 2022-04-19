<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Repetição em php</title>
</head>
<body>
    <h1>Estruturas de controle de repetição</h1>
    <h2>While - (enquanto)</h2>
    <?php
    $i = 1;
    while($i <= 5){
        ?>
        <p><?=$i?></p>
        <?php
        $i++;
    }
    ?>
    <h2>Do While (repita)</h2>
    <?php
    $j = 1;
    do{
        ?>
        <div> <h3> Olá </h3> </div>
        <?php
        $j++;
    } while ($j <=3);
    ?>
    <h2>For (para)</h2>
    <?php
    for($i = 1; $i <= 10; $i++){
        echo $i." ";
    }
    ?>

    <h2>Exercício Loop + Array</h2>
    <?php
    const MESES = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    ?>
    <ol> 
        
    <?php
    for( $j= 0;  $j<= 11; $j++){
        
        ?>
        <li><?=MESES[$j]?></li>
        <?php
        
    }
    ?>   
    </ol>

    <h2>Foreach</h2>

    <ol>
    <?php
        foreach(MESES as $mes){              
    ?>
        <li><?=$mes?></li>
    <?php
    
        }  
        ?>
    </ol>

    <?php
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe"
    ];
    echo $clubes["Corinthians"];
    foreach($clubes as $clube){
        ?>
        <p><?=$clube?></p>
        <?php
    }
    ?>

    <?php
    foreach($clubes as $clube => $apelido){
        ?>
        <p>O clube <?=$clube?>, é conhecido como <?=$apelido?></p>
        <?php
    }
    ?>

    <?php
    $alunos = 
    [
        ["nome" => "Chaves",
        "idade" => 8
        ],

        ["nome" => "Chapolin",
        "idade" => 20
        ],

        ["nome" => "Chiquinha",
        "idade" => 10
    ],
];
    foreach($alunos as $aluno){
        ?>
        <p>Aluno: <?=$aluno["nome"]?></p>
        <p> Idade: <?=$aluno["idade"]?></p>
        <hr>
        <?php
        
    }
    ?>
</body>
</html>