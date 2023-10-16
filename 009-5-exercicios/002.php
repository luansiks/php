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
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            echo"Gerando um numero aleaório entre 0 e 100...<br>";  
            echo "O valor gerado foi " . rand(0, 100), "\n";
        ?>
        <a href="002.php" target="_self"><button>&#x1F504; Gerar outro</button></a>
    </main>
</body>
</html>