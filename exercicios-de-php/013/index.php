<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caixa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor = $_REQUEST["valor"] ?? 0;
        $cem = intdiv($valor, 100);
        $cinquenta = intdiv(($valor % 100), 50);
        $dez = intdiv(($valor % 50), 10);
        $cinco = intdiv(($valor % 10), 5);
    ?>
    <main>
        <h2>Caixa Eletrolico</h2>
        <form action="index.php" method="request">
            <label for="ifvalor">Qual valor você deseja sacar? (R$)*</label><input type="number" name="valor" id="idvalor" value="<?=$valor?>" step="5"> 
            <p>*notas disponiveis R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
            <img src="" alt="">
        </form>
    </main>
    <section>
        <h2>Saque de R$ realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <?="<ul><li>$cem</li><li>$cinquenta</li><li>$dez</li><li>$cinco</li></ul>"?>
        <?php 
            echo"<li>$cem</li>"
        ?>
    </section>
</body>
</html>