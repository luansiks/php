<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $numero = $_REQUEST["numero"] ?? 1380;
        $xsalario = $numero / 1380;
        $xsalario = (int) $xsalario;
        $resto = $numero - $xsalario * 1380;
        $resto = number_format($resto, 2, ',', '');
        $formatnum = number_format($numero, 2, ',', '.');
    ?>
    <main>
        <form action="index.php" method="request">
            <label for="idnumero">Numero: </label><input type="number" name="numero" id="idnumero" value="<?=$numero?>" step=".01">
            <p>Considerando o salário mínimo de R$1.380,00</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?="<p>Quem recebe um salário de R$$formatnum ganha <strong>$xsalario salário(s) mínimo(s)</strong> + R$ $resto</p>"?>
    </section>
</body>
</html>