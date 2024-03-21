<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php
            $numero = $_GET["numero"];
            echo "O número escolhido foi <strong>$numero</strong>";
            echo "<br> O seu <em>antecessor</em> é " . ($numero - 1);
            echo "<br> O seu <em>sucessor</em> é " . ($numero + 1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>

</body>
</html>