<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        echo "Hoje é dia " . date("d/m/Y") . " \u{1F4C5}";
        echo " e a hora atual é " . date("G:i:s") . " \u{1F553}";
    ?>
</body>
</html> 