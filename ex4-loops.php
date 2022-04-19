<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex4-loops.css">
    <title>Exercício Loops</title>
</head>
<body>
<?php
$linguagens = 
[
    ["ID" => 1,
    "Linguagem" => "HTML",
    "Descrição" => "Estruturação"
    ],

    ["ID" => 2,
    "Linguagem" => "CSS",
    "Descrição" => "Estilo"
    ],

    ["ID" => 3,
    "Linguagem" => "JS",
    "Descrição" => "Comportamentos"
    ],
    ["ID" => 4,
    "Linguagem" => "PHP",
    "Descrição" => "Backend"
    ],
];
?>
<section>
<table>
    <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>
<?php
foreach($linguagens as $linguagem){
    ?>
    <tr>
        <td><?=$linguagem["ID"]?></td>
        <td><?=$linguagem["Linguagem"]?></td>
        <td><?=$linguagem["Descrição"]?></td>
    </tr>
    <?php
    
}
?>
</table>
</section>
</body>
</html>