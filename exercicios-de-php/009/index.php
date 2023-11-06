<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medias</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor1 = $_REQUEST["avalor"] ?? 0;
        $peso1 = $_REQUEST["apeso"] ?? 1;
        $valor2 = $_REQUEST["bvalor"] ?? 0;
        $peso2 = $_REQUEST["bpeso"] ?? 1;
        $arit = ($valor1 + $valor2) / 2;
        $pond = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        $arit = number_format($arit, 2, ',', '.');
        $pond = number_format($pond, 2, ',', '.');
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="index.php" method="request">
            <label for="idavalor">1° valor: </label><input type="number" name="avalor" id="idavalor" value="<?=$valor1?>">
            <label for="idapeso">1° peso: </label><input type="number" name="apeso" id="idapeso" value="<?=$peso1?>">
            <label for="idbvalor">2° valor: </label><input type="number" name="bvalor" id="idbvalor" value="<?=$valor2?>">
            <label for="idbpeso">2° peso: </label><input type="number" name="bpeso" id="idbpeso" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h1>Cálculo das Médias</h1>
        <?php 
            echo"Analisando os valores $valor1 e $valor2:";
            echo"<ul><li>A<strong> Média Aritimética Simples</strong> entre os valores é igual a $arit</li>";
            echo"<li>A<strong> Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $pond</li></ul>";
        ?>
    </section>
</body>
</html>