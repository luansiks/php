<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $ano1 = $_REQUEST["anoantes"] ?? 2000;
        $ano2 = $_REQUEST["ano"] ?? date("Y");
        $atual = date("Y");
        $quaseatual = date("Y") - 1;
        $resul = $ano2 - $ano1
    ?>
    <main>
    <h2>Calculando a sua idade</h2>
        <form action="index.php" method="request">
            <label for="idanoantes">Em que ano você nasceu?</label><input type="number" name="anoantes" id="idanoantes" value="<?=$ano1?>" max="<?=$quaseatual?>">
            <label for="idano"><?="Quer saber sua idade em que ano?(atualmente estamos em <strong>$atual</strong>)"?></label><input type="number" name="ano" id="idano" value="<?=$ano2?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?="Quem nasceu em $ano1 vai ter <strong>$resul anos</strong> em $ano2"?>
    </section>
</body>
</html>