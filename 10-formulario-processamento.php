<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulário com processamento</title>
</head>
<body>
    <h1>Formulário e processamento juntos</h1>
 <?php
    //detectar quando o form é acionado
    //isset: to determine whether a variable is set or not
    if(isset($_POST['enviar'])){
        //echo "ok!";
        if(empty($_POST['nome']) || empty($_POST['email'])){ 
        ?>  
          <p class='warning'>Preencha nome e e-mail! Clique em <a href="10-formulario-processamento.php"> Voltar</a></p>
          
            <?php 
            } else{
                ?>
                <?php
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);  
            ?>
                <section>
                    <h2>Dados enviados:</h2>
                    <p>Nome: <?=$nome?></p>
                    <p>Email: <?=$email?></p>
                </section>
    <?php 
    } 
 } else{
 ?>
 <form action="" method="POST">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </p>
    <p>
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email">
    </p>
    <button type="submit" name="enviar">Enviar</button>
    </form>

<?php
 }
?>
</body>
</html>