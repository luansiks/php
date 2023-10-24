<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <h1>Conversor de Moeda v2.0</h1>
    <?php
        $numero = $_REQUEST['numero'];
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'.$inicio.'%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);

        $cotação = $dados["value"][0]["cotacaoCompra"];

        $convers = $numero / $cotação;
        $convers = number_format($convers,2,'.','');
        echo"Seus R$ $numero equivalem a <strong>US$ $convers</strong>*<br><br>";
        echo"*cotação obtida diretamente do site do";
    ?>
    <a href="https://www.bcb.gov.br/" target="_black">Banco Central do Brasil</a>
    <a href="004.html" target="_self"><button>Voltar</button></a>
</section>
</body>
</html>
