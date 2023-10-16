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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? "desconecido";
            $eua = $numero / 5.03;
            $eua = number_format($eua,2,'.','');
            echo"Seus R$ $numero equivalem a <strong>US$ $eua</strong><br><br>";
            echo"<strong>*Cotação fixa de R$5,03</strong> informada diretamente no código.<br><br>";
        ?>
        <a href="003.html" target="_self"><button>voltar</button></a>
    </main>
</body>
</html>