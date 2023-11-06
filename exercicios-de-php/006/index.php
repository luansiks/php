<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisão</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $dividendo = $_REQUEST["dividen"] ?? 0;
        $divisor = $_REQUEST["divisor"] ?? 1;
        $cociente = $dividendo / $divisor ?? 0;
        $cociente = (int) $cociente;
        $resto = $dividendo % $divisor ?? 0;
    ?>
    <main>
        <form action="index.php" method="request">
            <label for="iddividen">Dividendo: </label><input type="number" name="dividen" id="iddividen" value="<?=$dividendo?>">
            <label for="iddivisor">Divisor: </label><input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
            <?php 
            
            ?>
            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td><td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td><td><?=$cociente?></td>
                </tr>
            </table>
        </section>
</body>
</html>