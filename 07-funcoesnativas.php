<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <h1>Exemplo de funções nativas do PHP</h1>
    <hr>
    <h2>String</h2>
    <h3>trim()</h3>
        <?php
        
            $nome = "   veronica lima   ";
            $nomeSemEspaco = trim($nome);
        ?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>
    <h3>String_replace()</h3>
        <?php
            $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
            $fraseBonita = str_replace(
                ["bobão", "xarope"],
                ["cara legal", "genial"],
                $fraseFeia
            );
                echo $fraseFeia;
                echo $fraseBonita;
        ?>
    <h3>explode()</h3>
        <?php
            $linguagens = "HTML - CSS - JS";
            $arrayLinguagens = explode("-", $linguagens)
        ?>
    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>
    <h2>Arrays</h2>
    <h3>implode()</h3>
    <?php
        $bandas = ["Savatage", "Nightwish", "Ghost"];
        $stringBandas = implode(" / ", $bandas);
    ?>
    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($stringBandas)?></pre>
    <h3>extract()</h3>
        <?php
            $aluno = [
                "id" => "Fulano",
                "idade" => 25,
                "sexo" => "Masculino",
                "cidade" => "São Paulo",
            ];
            extract($aluno);
        ?>
    <p><?=$id?></p>
    <p><?=$idade?></p>
    <p><?=$sexo?></p>
    <p><?=$cidade?></p>
    <h2>Filtros</h2>
    <?php
        $email = "veronica@veronica.com.br";
        $email2 = "veronica.com.br";
        $ataque = "<script>document.body.innerHTML = 'sou ráqui, muahahahhha! >.<'</script>";    
        $ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);  

    ?>
    <p><?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?></p>
    <p><?=var_dump(filter_var($email2, FILTER_VALIDATE_EMAIL))?></p>
    <h2>Criptografia(Segurança)</h2>
        <?php
            $senha = "abc123"; //plain text (sem segurança)
            /*Algoritmos comuns de criptografia suportados pelo PHP
            MDS. SAH1, SHA256*/
            $senhaMD5 = md5($senha);
            $senhaSHA1 = sha1($senha);
            $senhaSHA256 = hash('sha256', $senha);
            //recomendado:
            $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
        ?>
    <p>Senha (plain text)<?=$senha?></p>
    <p>Senha (MD5)<?=$senhaMD5?></p>
    <p>Senha (SHA1)<?=$senhaSHA1?></p>
    <p>Senha (SHA256)<?=$senhaSHA256?></p>
    <p>Senha (password_hash)<?=$senhaSegura?></p>
    <?php
        $senhaDigitada = "abc23";
        if(password_verify ($senhaDigitada, $senhaSegura)){
            echo "Beleza, senhas iguais.";
        } else{
            echo "Opa, senhas diferentes.";
        }
        ?> 
</body>
</html>