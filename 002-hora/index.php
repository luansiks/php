<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pre-procesor</title>
</head>
<body>
    <h1>exemplo php</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo"); //GM-3
        print"Hoje é dia " . date("D/M/Y");
        print" e a hora atual é " . date("G/I/s T");
    ?>
</body>
</html>