<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor com api</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas com API</h1>
        <?php
        // cotação copiada do google
        // $cotação = 5.03;
       
        // cotação da API do BC
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados['value'][0]["cotacaoCompra"];
        // quanto de grana vc tem
        $real = $_REQUEST["moeda"] ?? 0;
        // equivalencia em dolar 
        $dolar = $real / $cotacao;
        // mostrar resultado sem internacionalização
        //echo "Seus R\$"  . number_format($real, 2, ",", ".") ." equivalem a US\$" . number_format($dolar, 2, ",", ".");

        //formatação com internacionalização (bibilioteca intl)

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p> Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>