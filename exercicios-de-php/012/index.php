<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tempo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor = $_REQUEST["valor"] ?? 1;
        $semana = intdiv($valor, 604800);
        $dia = intdiv(($valor % 604800), 86400);
        $hora = intdiv(($valor % 86400), 3600);
        $min = intdiv(($valor % 3600), 60);
        $seg = intdiv(($valor % 60), 1);
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="request">
            <label for="">Qual é o total de segundos?</label><input type="number" name="valor" id="idvalor" value="<?=$valor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
        print"<p>Analizando o valor que digitou, <strong>$valor segundos</strong> equivalem a um total de:</p>";
        print"<ul><li>$semana semanas</li><li>$dia dias</li><li>$hora horas</li><li>$min minutos</li><li>$seg segundos</li></ul>"
        ?>
    </section>
</body>
</html>