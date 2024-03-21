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
        <h1>Conversor de moedas de cotação fixa</h1>
        <?php
        // cotação copiada do google
        $cotação = 5.03;
        // quanto de grana vc tem
        $real = $_REQUEST["moeda"] ?? 0;
        // equivalencia em dolar 
        $dolar = $real / $cotação;
        // mostrar resultado sem internacionalização
        //echo "Seus R\$"  . number_format($real, 2, ",", ".") ." equivalem a US\$" . number_format($dolar, 2, ",", ".");

        //formatação com internacionalização (bibilioteca intl)

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        echo "<p> Seus " . numfmt_format_currency($padrão, $real,"BRL") . " equivalem a <strong> " . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>