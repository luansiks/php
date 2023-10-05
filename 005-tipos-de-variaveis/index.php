<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos</title>
</head>
<body>
    <h1>teste</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        //$num =  011010;
        //print"o valor de num é $num!";

        //$var = 21;
        //var_dump($var)

        //$num = (int)3e2; // 3 x 10(2)
        //print"o valor é $num";
        //var_dump($num)

        //$num = (float)"950";
        //var_dump($num);

        //$casado = true;
        //var_dump($casado);
        //print"o valor casado é $casado"

        //$vet = [6.2, 2, "maria", 3, true];
        //var_dump($vet)

        class pessoa{
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p);
    ?>
</body>
</html>