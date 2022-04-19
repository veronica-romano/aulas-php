<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex3-condicionais.css">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3 - Condicionais</h1>
    <hr>
        <main>
            <?php
                $salarioAntigo = 2000;
            ?>
                    <p>Salário antigo: R$ <?=number_format($salarioAntigo, 2, ',', '.')?> </p>
            <?php
                if($salarioAntigo < 500){
                        $salarioNovo = $salarioAntigo * 1.15;
                }   elseif($salarioAntigo <=1000){
                    $salarioNovo =  $salarioAntigo * 1.10;
                    }   else{ 
                        $salarioNovo = $salarioAntigo * 1.05;
                        }
            ?>
                    <p>Salário novo: R$ <?=number_format($salarioNovo, 2, ',', '.')?> </p>
    <hr>
        </main>
</body>
</html>