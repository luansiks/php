<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros com raizes</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $numero = $_REQUEST["raiz"] ?? 1;
        $raiza = sqrt($numero);
        $raizb = pow($numero,(1/3));
        $raiza = number_format($raiza, 3, ',', '.');
        $raizb = number_format($raizb, 3, ',', '.');
        
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="" method="request">
            <label for="idraiz">Número: </label><input type="number" name="raiz" id="idraiz" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">

        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo"<p>Analisando o <strong>numero $numero</strong>, temos:</p>";
            echo"<ul><li>A sua raiz quadrada é $raiza</li>";
            echo"<li>A sua raiz cubica é $raizb</li></ul>";
        ?>
    </section>
</body>
</html>