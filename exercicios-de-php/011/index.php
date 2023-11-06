<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preços</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $reajuste = $_REQUEST["reajuste"] ?? 0;
        $produto = $_REQUEST["produto"] ?? 0;
        $result = ($reajuste / 100 * $produto) + $produto;
        $resulproduto = number_format($produto, 2, ',', '.');
        $result = number_format($result, 2, ',', '.');
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="index.php" method="request">
            <label for="idproduto">Preço do Produto (R$)</label><input type="number" name="produto" id="idproduto" value="<?=$produto?>">

            <label for="idreajuste">Qual sera o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label><input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudavalor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?="<p>O produto que custava $resulproduto, com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>$result</strong> a partir de agora</p>"?>
    </section>
    <script>
        mudavalor()
        function mudavalor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>