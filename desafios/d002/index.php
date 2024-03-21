<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1> Trabalhando com números aleatórios </h1>
        <?php
        $numSort = mt_rand(0, 100); // o mt_rand é um algoritimo mais moderno, o rand é mais lento e menos confiável.
        // pode ser usado tbm, mas para gerar um número aleatório criptográficamente seguro.
        echo "Gerando número aleatório entre 0 e 100 ... <br>";
        echo "O valor gerado foi: <strong>$numSort<strong>";
        ?>
    </main>

    <!--<form method="post">
        <input type="submit" name="gerarNumero" value="Gerar Novo Número"> 
    </form>  meu metodo -->
    <button onclick="javascript:document.location.reload()"> Gerar outro </button> <!-- método utilizando função Js com recarregamento da página -->
</body>

</html>