<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do processamento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"] ?? "kd o nome?"; //operador de coalescência nula ??
        $sobrenome = $_GET["sobrenome"] ?? "Kd o sobrenome karai? "; 
        echo "<p>É prazer te conhecer,<strong> $nome $sobrenome </strong>, bem vindo ao meu website! <p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

</body>

</html>