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
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? "desconecido";
            echo"O número escolido foi <strong>$numero</strong><br>";
            $numero -= 1;echo"O seu antecessor é $numero<br>";
            $numero += 2;echo"O seu sucessor é $numero";

        ?>
        <a href="001.html" target="_self"><button>&#x1F519;voltar</button></a>
    </main>
</body>
</html>