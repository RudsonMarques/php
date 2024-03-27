<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
        $num = $_POST["n"] ?? 0;
        $int = (int) $num;
        $fra = $num - $int;
        // Ivan me orientou à abrir e fechar tags php para executar somente trechos de código php, como no exemplo abaixo, os echos foram removidos dando lugar as tags de php ternário, separando o que é html do que é php. Além disso a concatenação saiu.
        ?>
        <p> Analisando o número <strong> <?= number_format($num, 3, ",", ".") ?> </strong> informado pelo usuário: </p>
        <ul>
            <li> A parte inteira do número é:<strong> <?= number_format($int, 3, ",", ".") ?></strong></li>
            <li> A parte fracionária do número é: <strong> <?= number_format($fra, 3, ",", ".") ?></strong></li>
        </ul>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>