<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="ex7-form.css">
    <title>Document</title>
</head>
<body>
    <main>
    <h1>Exercício 7 - Formulários</h1>
    <form action="ex7-form.php" method="post">
        <p>
            <label for="nome">Nome do produto:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="fabricantes"> Fabricante:</label>
            
            <select name="fabricantes" id="fabricantes">
                <option value="Selecione">Selecione</option>
                <?php $fabricantes = ["Samsung","Dell", "Asus", "Apple"]; 
                foreach ($fabricantes as $fabricante){
                ?>
                <option><?= $fabricante ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="preco">Valor:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step=".01">
        </p>
        <p>
            <label for="descricao">Descrição:</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar Dados</button>
        </form>
    </main>
</body>
</html>