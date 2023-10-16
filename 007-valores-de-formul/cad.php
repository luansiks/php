<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>resultado do processamento</h1></header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?? "desconecido";
            $sobrenome = $_REQUEST["sobrenome"] ?? "não indentificadog";
            print"é um prazer te conhecer <strong>$nome $sobrenome</strong>.";
        ?>
        <p><a href="index.html" target="_self" real="exit">sair</a></p>
    </main>
</body>
</html>