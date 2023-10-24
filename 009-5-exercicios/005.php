<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_REQUEST["numero"];
            echo"Analizando o número <strong>$numero</strong> informado pelo usuário:<br><br>";
            $inteiro = (int) $numero;
            $naointeiro = $numero - $inteiro;
            echo"<li>A parte inteira do numero é <strong>$inteiro</strong></li>";
            echo"<li>A parte fracionaria do numero é <strong>$naointeiro</strong></li>";
        ?>
        <a href="005.html" target="_self"><button>voltar</button></a>
    </main>
</body>
</html>