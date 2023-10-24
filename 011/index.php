<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicios php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //capiturando os dados do formulario retroalimentado
        $vari1 = $_POST['n1'] ?? 0;
        $vari2 = $_POST['n2'] ?? 0;
        $vari3 = $vari1 + $vari2;
    ?>
    <main>
        <h1>somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="idn1">numero1: </label><input type="number" name="n1" id="idn1" value="<?=$vari1?>">
            <label for="idn2">numero2: </label><input type="number" name="n2" id="idn2" value="<?=$vari2?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section>
        <h2>resultado da soma</h2>
        <?="<p>a soma entre os numeros é $vari3</p>"?>
    </section>
</body>
</html>